<?php
include('functions.php');

$src = 'simple.png'; 


$img = imagecreatefrompng($src); 
$real_message = ''; 

$count = 0; 
$pixelX = 0; 
$pixelY = 0; 

list($width, $height, $type, $attr) = getimagesize($src); 

for ($x = 0; $x < ($width*$height); $x++) { 
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

  $blue = toBin($b); 

  $real_message .= $blue[strlen($blue) - 1]; 

  $count++; 

  if ($count == 8) { 
      if (toString(substr($real_message, -8)) === '|') { 
          $real_message = toString(substr($real_message,0,-8)); 
          echo $real_message;
          die;
      }
      $count = 0; 
  }

  $pixelX++; 
}
?>
