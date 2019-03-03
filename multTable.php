<?php
echo "<table>";
  for($i =1; $i <= 100; $i+=1){
    echo "<tr>";
    for($j=1; $j <= 100; $j+=1){
        echo " <td> " . $i*$j . " </td>";
    }
    echo "</tr>";
  }
echo "</table>";
?>
