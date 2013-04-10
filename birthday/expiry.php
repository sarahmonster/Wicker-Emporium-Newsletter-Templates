<?php
  // generate the date string
  $nextweek  = mktime(0, 0, 0, date("m"), date("d")+7, date("Y"));
  $date = date('F j, Y') ." and ". date('F j, Y', $nextweek);
  //echo $date;

// create the image
$my_img = imagecreate( 250, 20 );
$background = imagecolorallocate( $my_img, 112, 164, 214 );
$text_colour = imagecolorallocate( $my_img, 255, 255, 255 );
imagestring( $my_img, 2, 5, 3, $date,
  $text_colour );
imagesetthickness ( $my_img, 3 );

header( "Content-type: image/png" );
imagepng( $my_img );
imagecolordeallocate( $text_color );
imagecolordeallocate( $background );
imagedestroy( $my_img );
?>