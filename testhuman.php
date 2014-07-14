Are you a human?<br/>
<br/>
If you are, then please convert this mispelt number into its correct decimal form. Then stick the word I give you on the end<br/>
<i>eg. "poo cows-hand and fwenty thwee PLUS minotaur" is "2023minotaur"</i><br>
Then I'll happily add your guestbook entry.<br/>
<br>


<?php


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


$entry = urlencode(stripslashes($entry));
$name = urlencode(stripslashes($name));
$title = urlencode(stripslashes($title));




$number[0]="ziiro";
$number[1]="wan";
$number[2]="thoo";
$number[3]="fwee";
$number[4]="phwoar";
$number[5]="phwive";
$number[6]="sicks";
$number[7]="swevyn";
$number[8]="ached";
$number[9]="ny-en";
$number[10]="teighn";
$number[11]="e-weven";
$number[12]="too-elves";
$number[13]="shirt-mean";
$number[14]="phwar-te-en";
$number[15]="fifth-teen";
$number[16]="pix-peen";
$number[17]="seive-en-teen";
$number[18]="aching-teen";
$number[19]="nine-meen";
$number[20]="twent-wee";
$number[21]="tu-ent-wee-wan";

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

$answer= (crc32($entry)%21 +21)%21;
$wordanswer = (crc32($entry)%12 +12)%12;


echo "<form name='checkhuman' method='GET' action='guestbook.php'>";

echo "<h3>".$number[$answer]." PLUS ".$words[$wordanswer]."</h3> = <input type='text' name='answer' tabindex=1 style='width:50px;'>";

echo '<input type="hidden" name="name" value="'.$name.'">';
echo '<input type="hidden" name="title" value="'.$title.'">';
echo '<input type="hidden" name="entry" value="'.$entry.'">';

?>

<input 
	type="submit" 
	name="Submit" 
	value="Send it to me" 
	tabindex=4 
	
	style="	margin-top: 5px;
		color:#611;	
		background-color:#FFFFFF;
		font-size: 17px;
		text-align: left;
		border:1px solid #611;
		width:150px;
		text-align:center
	">
</form>