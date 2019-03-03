<?php

if(isset($_POST['action'])){
  $q1val = $_POST["q1"];
  $q2val = $_POST["q2"];
  $q3val = $_POST["q3"];
  $q4val = $_POST["q4"];
  $q5val = $_POST["q5"];
  $count = 0;
  if($q1val == "Rick Deckard"){
    $count = $count + 1;
  }
  if($q2val == "A dove"){
    $count = $count + 1;
  }
  if($q3val == "Ridley Scott"){
    $count = $count + 1;
  }
  if($q4val == "Denis Villeneuve"){
    $count = $count + 1;
  }
  if($q5val == "Do Android's Dream of Electic Sheep?"){
    $count = $count + 1;
  }

  $score = ($count/5)*100;
}



?>
