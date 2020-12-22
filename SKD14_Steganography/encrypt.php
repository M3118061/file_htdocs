<?php
include('functions.php');



$msg = 'nama saya adalah Muthia dan NIM saya adalah M3118061'; 
$src = 'panda.jpg'; 

$msg .='|'; 
$msgBin = toBin($msg); 
$msgLength = strlen($msgBin); 
$img = imagecreatefromjpeg($src); 
list($width, $height, $type, $attr) = getimagesize($src); 

if($msgLength>($width*$height)){ 
  echo('Message too long. This is not supported as of now.');
  die();
}

$pixelX=0; 
$pixelY=0; 

for($x=0;$x<$msgLength;$x++){ 

  if($pixelX === $width+1){ 
    $pixelY++;
    $pixelX=0;
  }

  if($pixelY===$height && $pixelX===$width){ 
    echo('Max Reached');
    die();
  }

  $rgb = imagecolorat($img,$pixelX,$pixelY); 
  $r = ($rgb >>16) & 0xFF; 
  $g = ($rgb >>8) & 0xFF; 
  $b = $rgb & 0xFF;

  $newR = $r; 
  $newG = $g; 
  $newB = toBin($b); 
  $newB[strlen($newB)-1] = $msgBin[$x]; 
  $newB = toString($newB); 

  $new_color = imagecolorallocate($img,$newR,$newG,$newB); 
  imagesetpixel($img,$pixelX,$pixelY,$new_color); 
  $pixelX++; 

}
echo $x;
imagepng($img,'simple.png');
imagedestroy($img)

?>
