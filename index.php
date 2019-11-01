<!DOCTYPE html>    <!-- guess.php -->
<html lang="en">
  <head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet">
</head>
    <title>Guess a Number</title>
  </head>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $randNum = rand(1, 10);
    if($_POST["num"] == "") {
        echo "<p id='response'>Please enter a number.</p>";
    }else if ($randNum == $_POST["num"]) {
      echo "<h1 id='response'>Correct!</h1>";
   } else {
      echo "<p id='response'>No, I was thinking of $randNum.</p>";
   }        
}
?>
<div class="container-fluid padding" id="gameTitle">   
    <h1 class="display-4"> Numbers Guessing game!</h1>
</div>
<div class="container-fluid padding" id="game">
  <form method="post" action="guess.php">
    <p>I'm thinking of a number between 1 and 10.</p>
    <p>Your guess? <input type="number" name="num" min="1" max="10" autofocus><input type="submit" value="Guess"></p>
  </form>
</div>
<div class="container-fluid padding" id="report">
    <h3> Report</h3>
    <p> For this project I had a hard time understanding php code. Until php, I have picked up languages rather quickly, but with php I seem to have an issue getting the hang of the syntax as it is rather unique. The program is relatively simple and I added a parameter to make sure you cannot run the game if no number is entered. I think using javascript, node.js and SQL through mySQL would be my preffered method of making serverside calculations.</p>
</div>
</html>