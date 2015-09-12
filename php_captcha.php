<?php
session_start();

$RandomStr = md5(microtime()); // md5 to generate the random string

$ResultStr = substr($RandomStr,0,2); //trim 2 digit 

$NewImage =imagecreatefrompng("img.png"); //image create by existing image and as back ground 

$LineColor = imagecolorallocate($NewImage,0,0,0); //line color 
$TextColor = imagecolorallocate($NewImage,204,0,0); //text color-white

//imageline($NewImage,1,1,40,40,$LineColor);
imageline($NewImage,1,100,50,0,$LineColor);
imageline($NewImage,1,10,100,40,$LineColor);
imageline($NewImage,30,0,120,50,$LineColor);

imagestring($NewImage, 5, 16, 4, $ResultStr, $TextColor);// Draw a random string horizontally 

$_SESSION['capkey'] = $ResultStr;// carry the data through session

header("Content-type: image/png");// out out the image 
ImageAlphaBlending( $NewImage, false );
ImageSaveAlpha( $NewImage, true );
imagepng($NewImage); //Output image to browser 

?>
