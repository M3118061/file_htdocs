<?php
echo "<pre><span class='inner-pre' style='font-size:40px;'>";
for  ($row = 0; $row < 7; $row++){
  for ($col = 0; $col <= 7; $col++){
    if ($col==1 or (($row == 0 or $row == 6) and ($col > 1 and $col < 8)) or ($col==7 and $row!=0 and $row!=7)){
         echo "#";
      } elseif (($col==2 and $row==1) or ($col==6 and $row==1) or ($col==2 and $row==5) or ($col==6 and $row==5)){
         echo "#";
      } elseif (($col==3 and $row==2) or ($col==5 and $row==2) or ($col==3 and $row==4) or ($col==5 and $row==4)){
        echo "#";
      } elseif (($col==4 and $row==3)){
        echo "#";
      } else{
       echo " ";
      }
}
echo "<br>";
}
echo "</span></pre>";
?>