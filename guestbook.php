<?php

$words[0]="carrot";
$words[1]="onion";
$words[2]="raffi";
$words[3]="giraffe";
$words[4]="monster";
$words[5]="maffi";
$words[6]="oranges";
$words[7]="parrots";
$words[8]="mandarin";
$words[9]="shutup";
$words[10]="noway";
$words[11]="norway";
$words[12]="japan";

$correctnum = (crc32($entry)%21+21)%21;
$correctword = $words[(crc32($entry)%12+12)%12];

if ($answer==($correctnum.$correctword)){

$guestbook = fopen("5.txt", "a");

/**
 * Allow these tags
 */
$allowedTags = '<b><i><a><hr><img>';

/**
 * Disallow these attributes/prefix within a tag
 */
$stripAttrib = 'javascript:|onclick|ondblclick|onmousedown|onmouseup|onmouseover|'.
               'onmousemove|onmouseout|onkeypress|onkeydown|onkeyup';

/**
 * @return string
 * @param string
 * @desc Strip forbidden tags and delegate tag-source check to removeEvilAttributes()
 */
function removeEvilTags($source)
{
   global $allowedTags;
   $source = strip_tags($source, $allowedTags);
   return preg_replace('/<(.*?)>/ie', "'<'.removeEvilAttributes('\\1').'>'", $source);
}

/**
 * @return string
 * @param string
 * @desc Strip forbidden attributes from a tag
 */
function removeEvilAttributes($tagSource)
{
   global $stripAttrib;
   return stripslashes(preg_replace("/$stripAttrib/i", 'forbidden', $tagSource));
}

$entry = removeEvilTags($entry);

$entry = strip_tags($entry, '<a>,<img>');
$name = strip_tags($name);
$title = strip_tags($title);

$entry = urldecode($entry);
$name = urldecode($name);
$title = urldecode($title);

$entry = nl2br($entry);

$entry = stripslashes($entry);
$name = stripslashes($name);
$title = stripslashes($title);

$content = '<div class="heading"><strong>'.$title.'</strong> | '.$name.'</div> <div class="entry">'.$entry.'<br><br><i style="font-size:12px">Added: '.date('dS \of F y').'</i></div>';

$content = str_replace('<!DOCTYPE','<DOCTYPE',$content);

$content = str_replace("'<style[^>]*>.*</style>'siU",'',$content);


fwrite($guestbook,$content);

echo "

<html>
<body>
Thanks, or whatever.<br>
<br>
<a href='http://www.meandteddy.com/index.php?id=5'>Go back...</d>
</body>
</html>";


}


else{ echo "You are blatently a robot...sorry, but you are!";};

?>

