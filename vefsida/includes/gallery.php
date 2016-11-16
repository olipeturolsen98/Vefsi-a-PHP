<?php

//include slideshows.php in your script
include "slideshows.php";

//read the query variables
$control =  $_REQUEST['control'];
$id = $_REQUEST['user_id'];

//add 22 slides
for ( $i=0; $i<22; $i++ ){
    $slideshow[ 'slide' ][ $i ] = array ( 'url' => "imgs/Maps/Buried.png" );
}

if ( $id==658 ){

    //make the controls the same as the $control variable for user #658
    $slideshow[ 'control' ][ 'bar_visible' ] = $control;
    
}else{

    //hide the controls for all other users
    $slideshow[ 'control' ][ 'bar_visible' ] = "off";

}
                            
//send the slideshow data to the slideshows.swf flash file
Send_slideshow_Data ( $slideshow );

?>