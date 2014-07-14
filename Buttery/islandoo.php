<?php

$random_comments = array(
                         "hey there, what's happening? This site is cool!",
                         
                         "I'm going to Amsterdam on holiday tomorrow, gonna be fun. but probably not as fun as being on Shipwrecked. reckon you might get on? anyway, have a good evening. and good luck.",
                         
                         "do you have a teddy? I love my teddy so much. he's the coolest!",

                         "did you see Neighbours today? I love it, but I have to work at the mo. It really is annoying. apparently Susan and Karl are back together?",

                         "yoyoyo, what's happening. I'm all bored!",

                         "hi there, good to see you on here. Good luck and everything. mattyJ",
 
                         "you heard what's happened to Richard Hammond? He's a bit annoying some times, but Top Gear is a great show. Big up yo-self! MattyJ" ,

                         "Extras is on tonight, but I'm gonna miss it...bum!!! Do you watch Extras? .... good luck. mattyj"
                        );

$i = 3567;
while ($i<= 4000)
  {
    echo "<a href='http://www.islandoo.com/account/post/";
    echo $i;
    echo "?comment[comment]=";
    echo urlencode($random_comments[rand(0,7)]);
    echo "'> click here for ";
    echo $i;
    echo "</a>";
    $i++;
  }

?>