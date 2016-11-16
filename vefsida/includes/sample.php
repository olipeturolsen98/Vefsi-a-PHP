<?php

include "slideshow.php";

//add 3 slides and give each a different slide duration
$slideshow[ 'slide' ][ 0 ] = array ( 'url' => "imgs/Maps/Ascension.jpg", 'duration' => 2 );
$slideshow[ 'slide' ][ 1 ] = array ( 'url' => "imgs/Maps/CalloftheDead.jpg", 'duration' => 3 );
$slideshow[ 'slide' ][ 2 ] = array ( 'url' => "imgs/Maps/DieRise.jpg", 'duration' => 2 );

//define the transitions for each slide
$slideshow[ 'transition' ][ 0 ] = array ( 'type' => "drop", 'duration' => 1 );
$slideshow[ 'transition' ][ 1 ] = array ( 'type' => "fade_to_black", 'duration' => 2 );
$slideshow[ 'transition' ][ 2 ] = array ( 'type' => "push_up", 'duration' => 1 );
						
Send_Slideshow_Data ( $slideshow );

?>
