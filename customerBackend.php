<?php

if(isset($_POST['action'])){
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

  echo "<p id = " . ""wMessage"". ">" . "Welcome!  Your password is " . $Password . "/>";

  echo "<table><tr><td></td><td>Quantity</td><td>Cost Per Item</td><td>Sub Total</td>";
  echo "<table><tr><td></td><td>Item One</td><td>$10.00</td><td>" . $firstPrice . "</td>";
  echo "<table><tr><td></td><td>Item Two</td><td>$25.00</td><td>" . $secondPrice . "</td>";
  echo "<table><tr><td></td><td>Item Three</td><td>$50.00</td><td>" . $thirdPrice . "</td>";
  echo "<table><tr><td></td><td>Shipping</td><td>" . $shipMethod . "</td><td>" . $shipPrice . "</td>";
  echo "<table><tr><td></td><td>Total Cost</td><td>$" . $totalPrice . "</td>";
  
}

 ?>
