<?php
echo "<table>";
  for($i =0; $i <= 100; $i+=1){
    echo "<tr>";
    for($j=0; $j <= 100; $j+=1){
      if($i == 0 ){
        echo " <td> " . $j . " </td>";
      }
      else if($j == 0){
        echo " <td> " . $i . " </td>";
      }
      else{
        echo " <td> " . $i*$j . " </td>";
      }
    }
    echo "</tr>";
  }
echo "</table>";
?>
