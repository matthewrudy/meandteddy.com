<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><title>Me And Teddy - Home of Matthew Rudy Jacobs</title>

<link href="http://www.meandteddy.com/style/style0.css" rel="stylesheet" type="text/css">
<script language="Javascript">
function popup(url,win,width,height) {
  mywindow = self.open(url,win,'resizable=yes,scrollbars=yes,width=' + width + ',height=' + height);
  mywindow.location.href = url;
  if (mywindow.opener == null) mywindow.opener = self;
}
</script></head>


<body>
<table align="center" bgcolor="#ffeeee" border="5" cellpadding="0" width="800">
  <tbody><tr>
    <td height="240" valign="top" width="800"><div class="title"><span style="font-size: 72px;">M</span>e
    <span style="font-size: 72px;">A</span>nd
    <span style="font-size: 72px;">T</span>eddy
	<span align="center" class="subtitle">Ursine Love Is Good</span></div></td>
  </tr>
  <tr>
    <td height="25" valign="bottom">
	<div class="navbar" align="center">
		<a href="http://www.meandteddy.com/index.php?id=0">Home</a> | 
		<a href="http://www.meandteddy.com/index.php?id=1">Me</a> | 
		<a href="http://www.meandteddy.com/index.php?id=2">Films</a> | 
		<strong><a href="http://www.meandteddy.com/index.php?id=3">Photos</a></strong> | 
		<a href="http://www.meandteddy.com/index.php?id=4">Neighbours</a> |
		<a href="http://www.meandteddy.com/index.php?id=5">Guestbook</a> |
		<a href="http://www.meandteddy.com/index.php?id=6">Links</a><br>
		</div></td>
  </tr>
  <tr>
    <td valign="top">
	<div class="page">
My Photography
</div>

<?php
if($gallery){

	if($photo){}

	else{
		$i=1;
		do{
			echo "<a href='index.php?gallery=$gallery&photo=$i'><img src='$gallery/thumbnails/$i.jpg' 			align=left>";
			include($gallery."/".$i.".txt");
			echo "</a><br clear=all>";
			$i++;
		}
		
		while (file_exists($gallery."/".$i.".txt"));
	}
	
}





else{


	$i=50;
	

	do{

		if(file_exists($i.".txt")){
			$j=0;
			do{$j++;}while(file_exists($i."/".($j+1).".txt"));
			$j=rand(1,$j);
			echo "<a href='index.php?gallery=$i'><img src='$i/thumbnails/$j.jpg' align=left>";
			include($i.".txt");
			echo "</a><br clear=all>";
		}
		$i--;

	}
	while($i!=0);

}


?>

















    </td>
  </tr>

  <tr>
    <td>
	<div class="footer" align="center"> 
	        
		

		<a href="http://www.meandteddy.com/index.php?id=0">Home</a> | 
		<a href="http://www.meandteddy.com/index.php?id=1">Me</a> | 
		<a href="http://www.meandteddy.com/index.php?id=2">Films</a> | 
		<strong><a href="http://www.meandteddy.com/index.php?id=3">Photos</a></strong> | 
		<a href="http://www.meandteddy.com/index.php?id=4">Neighbours</a> |
		<a href="http://www.meandteddy.com/index.php?id=5">Guestbook</a> |
		<a href="http://www.meandteddy.com/index.php?id=6">Links</a>
<br> 


		copyright 2004 - <a href="mailto:matthewrudyjacobs@meandteddy.com">Matthew Rudy Jacobs</a> - all rights reserved
	</div>
    </td>
  </tr>
</tbody></table>
</body></html>