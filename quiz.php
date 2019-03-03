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

  echo "<div> Question 1: What is the name of Harrison Ford's character in Blade Runner? <br>";
  echo "You answered : " . $q1val . "<br>";
  echo "Correct answer : Rick Deckard <br>";
  echo "</div> <br>";

  echo "<div> Question 2: What is Roy Batty holding at the end of Blade Runner? <br>";
  echo "You answered : " . $q2val . "<br>";
  echo "Correct answer : A dove <br>";
  echo "</div> <br>";

  echo "<div> Question 3: Who directed Blade Runner? <br>";
  echo "You answered : " . $q3val . "<br>";
  echo "Correct answer : Ridley Scott <br>";
  echo "</div> <br>";

  echo "<div> Question 4: Who directed Blade Runner 2049? <br>";
  echo "You answered : " . $q4val . "<br>";
  echo "Correct answer : Denis Villeneuve <br>";
  echo "</div> <br>";

  echo "<div> Question 5: What novel is Blade Runner based off of? <br>";
  echo "You answered : " . $q5val . "<br>";
  echo "Correct answer : Do Android's Dream of Electic Sheep? <br>";
  echo "</div> <br>";

  echo "<div> Total Correct: " . $count "<br>";
  echo "Grade: " . $score . "% </div>";
}



?>
