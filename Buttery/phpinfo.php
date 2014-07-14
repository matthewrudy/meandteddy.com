<?php

// initialisation

session_start();

// when page is reloaded guestbook always goes back to the start...only changes through ajax

$_SESSION['guestbook_start'] = 0;


// set the offset for the posts


if (!isset($start) || $start<0)
{$start = 0;}
else {$start = (int)($start);};


if (!isset($show) || $show <1)
{$show = 5;}
else{$show = (int)($show);};







// define the colour rotation for the posts.

function shift_colour()
	{
	global $colour;
	switch ($colour) 
		{
		case green:
   			$colour = "blue";
   			break;
		case blue:
   			$colour = "pink";
   			break;
		case pink:
   			$colour = "green";
   			break;
		default:
			$colour = "green";
		}
	return $colour;
	}


// function to format date from mysql datetime "2004-09-18 11:46:28" to "18th of September 2004"

function my_date_format($date) {
	$first = explode(" ", $date); 	// get "2004-09-18" as $first[0]
	$second= explode("-", $first[0]);	// get "2004", "09" and "18" as $second[0], [1] and [2]
	$year = (int)($second[0]);
	
	$months = array(1 => "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

	$month = $months[(int)($second[1])];
	$day = (int)($second[2]);	

	if ($day == 1 || $day == 21 || $day == 31)
		{ $th = "st";}
	elseif ($day == 2 || $day == 22)
		{ $th = "nd";}
	elseif ($day == 3 || $day == 23)
		{ $th = "rd";}
	else  { $th = "th";}

	return ($month." ".$day.$th." ".$year);
	}



?>
<html>
	<head>
  		<title>MeAndTeddy - Ursine Love is good! >> index</title>
  		<link href="style.css" media="screen" rel="Stylesheet" type="text/css" />
  		<script src="javascripts/prototype.js" type="text/javascript"></script>
	</head>


	<body>
  		<div id='content' >
  			<div id='top'>
    				<p><h1>me and<br /> teddy</h1></p>

   				<p class='navbar'>
      				<span id='blog'>blog</span><br />
      				<span id='fotos'>fotos</span><br />
      				<span id='films'>films</span><br />
      				<span id='links'>links</span><br />
    				</p>

    		
  			</div>


<?php



// connect to the DB

$db = mysql_connect("localhost", "me", "poo");
mysql_select_db("meandteddy",$db);

// retrieve blog using $start and $show

$result = mysql_query("
   SELECT *
   FROM `posts`
   WHERE `cat` = 'blog' ORDER BY `created_on` DESC LIMIT $start, $show",$db);


while ($myrow = mysql_fetch_array($result)) 
	
	{

	printf("			<div class='%spost post'>\n"						, shift_colour() );
	printf("			    	<div class='inner'>\n"							);
	printf("			    		<div class='heading'>\n"					);
	printf("		      			<p><span class='title'>%s</span></p>\n"		, $myrow['title'] );
	printf("					</div>\n\n"								);

	printf("					<div class='entry'>\n"						);
	printf("						%s<br/>\n\n"						, $myrow['text'] );

	printf("						<span class='date'><i>posted on: %s </i></span>\n" , my_date_format($myrow['created_on']));
	printf("					</div>\n"								);
	printf("				</div>\n"									);
	printf("			</div>\n\n\n\n\n"									);

	}




?>
		</div>


	<div id='guestbook'>
    		<h1>guest book</h1>
  			<div id='guestbook-content'>  		
<?php

$result = mysql_query("
   SELECT *
   FROM `posts`
   WHERE `cat` = 'guestbook' ORDER BY `created_on` DESC",$db);

while ($myrow = mysql_fetch_array($result)) {


	printf("				<div class='%spost post'>\n"											,shift_colour());
	printf("  			  		<div class='heading'>\n");
	printf("						<p><span class='title'>%s</span></p>\n"								,$myrow['title']);
	printf("						<p><i><span class='author'>by %s</span> <span class='date'>%s</span></i></p>\n"		,$myrow['author'], my_date_format($myrow['created_on']));
	printf("					</div>\n\n");

	printf("					<div class='entry'>\n");
	printf("						%s\n"														,$myrow['text']);
	printf("					</div>\n");
	printf("				</div>\n\n");

	}

?>
			</div>
		</div>
	</body>
</html>
