<?php $id = $_GET["id"]; $special = $_GET["special"]; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="ICBM" content="51.757,-0.317">
<meta name="DC.title" content="MeAndTeddy">
<title>Me And Teddy - Home of Matthew Rudy Jacobs</title>
<link href="style/style0.css" rel="stylesheet" type="text/css">
<script language=Javascript>
function popup(url,win,width,height) {
  mywindow = self.open(url,win,'resizable=yes,scrollbars=yes,width=' + width + ',height=' + height);
  mywindow.location.href = url;
  if (mywindow.opener == null) mywindow.opener = self;
}
</script>
</head>

<body>
<table width="800" border="5" align="center" cellpadding="0" bgcolor="#FFEEEE" >
  <tr>
    <td width="800" height="240" valign="top"><div class="title"><span style="font-size:72px">M</span>e</br>
    <span style="font-size:72px">A</span>nd</br>
    <span style="font-size:72px">T</span>eddy</br>
	<span align=center class="subtitle">Ursine Love Is Good</span></div></td>
  </tr>
  <tr>
    <td height="25" valign="bottom">
	<div align=center class="navbar">
                <?php if($id==0){echo("<strong>");} ?>
                    <a href="index.php?id=0">
                        Home
                    </a>
                <?php if($id==0){echo("</strong>");} ?> |

		<?php if($id==1){echo("<strong>");} ?>
                    <a href="index.php?id=1">
                        Me
                    </a>
                <?php if($id==1){echo("</strong>");} ?> |
 
		<?php if($id==2){echo("<strong>");} ?>
                    <a href="index.php?id=2">
                        Films
                    </a>
                <?php if($id==2){echo("</strong>");} ?> | 

		<?php if($id==3){echo("<strong>");} ?>
                    <a href="index.php?id=3">
                        Photos
                    </a>
                <?php if($id==3){echo("</strong>");} ?> | 
		
                <?php if($id==4){echo("<strong>");} ?>
                    <a href="index.php?id=4">
                        Neighbours
                    </a>
                <?php if($id==4){echo("</strong>");} ?> |

		<?php if($id==5){echo("<strong>");} ?>
                    <a href="index.php?id=5">
                        Guestbook
                    </a>
                <?php if($id==5){echo("</strong>");} ?> |

		<?php if($id==6){echo("<strong>");} ?>
                    <a href="index.php?id=6">
                        Links
                    </a>
                <?php if($id==6){echo("</strong>");} ?>
                
                <br>
		</div></td>
  </tr>
  <tr>
    <td valign="top">
	<?php 
		$id=(int)($id)%7;$special=(int)($special);
		if(file_exists($id."-".$special.".txt")){include($id."-".$special.".txt");}
		else{include ($id.".txt");}
	?>  
    </td>
  </tr>

  <tr>
    <td>
	<div align=center class="footer"> 
	        
		

		<?php if($id==0){echo("<strong>");} ?><a href="index.php?id=0">Home</a></strong> | 
		<?php if($id==1){echo("<strong>");} ?><a href="index.php?id=1">Me</a></strong> | 
		<?php if($id==2){echo("<strong>");} ?><a href="index.php?id=2">Films</a></strong> | 
		<?php if($id==3){echo("<strong>");} ?><a href="index.php?id=3">Photos</a></strong> | 
		<?php if($id==4){echo("<strong>");} ?><a href="index.php?id=4">Neighbours</a></strong> |
		<?php if($id==5){echo("<strong>");} ?><a href="index.php?id=5">Guestbook</a></strong> |
		<?php if($id==6){echo("<strong>");} ?><a href="index.php?id=6">Links</a></strong>
<br> 
<img src="images/misc/spacer.gif" style="max-height:0px;max-width:0px" align=left><a href="http://www.spreadfirefox.com/?q=affiliates&amp;id=0&amp;t=81"><img border="0" alt="Get Firefox!" title="Get Firefox!" style="max-width:0px;max-height:0px" src="http://www.spreadfirefox.com/community/images/affiliates/Buttons/80x15/blue_1.gif" align=right></a>

		copyright 2004 - <a href="mailto:matthewrudyjacobs@meandteddy.com">Matthew Rudy Jacobs</a> - all rights reserved
	</div>
    </td>
  </tr>
</table>
</body>
</html>
