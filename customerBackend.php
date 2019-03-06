<?php
    echo '<link rel="stylesheet" type="text/css" href="style.css">';

  $iOneQty = $_POST['itemOne'];
  $iTwoQty = $_POST['itemTwo'];
  $iThreeQty = $_POST['itemThree'];
  $shipMethod = $_POST['method'];
  $Password = $_POST['Password'];

  $firstPrice = ($iOneQty * 10);
  $secondPrice = ($iTwoQty * 25);
  $thirdPrice = ($iThreeQty * 50);


  $shipPrice = 0;

  if($shipMethod == "overNight"){
    $shipPrice = 50;
  }
  else if($shipMethod == "threeDay"){
    $shipPrice = 5;
  }

  $totalPrice = $firstPrice + $secondPrice + $thirdPrice + $shipPrice;

  echo "<h2>" . "Welcome!  Your password is " . $Password . ", and the following is your receipt!</h2>";

  echo "<center><table><tr><td></td><td>Quantity</td><td>Cost Per Item</td><td>Sub Total</td></tr>";
  echo "<tr><td>Item One</td><td>" . $iOneQty .  "</td><td>$10.00</td><td>$" . $firstPrice . ".00</td></tr>";
  echo "<tr><td>Item Two</td><td>" . $iTwoQty .  "</td><td>$25.00</td><td>$" . $secondPrice . ".00</td></tr>";
  echo "<tr><td>Item Three</td><td>" . $iThreeQty .  "</td><td>$50.00</td><td>$" . $thirdPrice . ".00</td></tr>";
  echo "<tr><td>Shipping</td><td>" . $shipMethod . "</td><td>" . $shipPrice . "</td></tr>";
  echo "<tr><td>Total Cost</td><td>$" . $totalPrice . "</td><td></td></tr></table></center>";



 ?>
