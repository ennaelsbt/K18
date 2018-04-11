<?php
session_start();

// for better readability
$numberFromUser = $_POST["numberFromUser"];
$numberByProgram = $_POST["numberByProgram"];
$tryCounter = $_SESSION["count"];
$message = "";

if (!isset($numberFromUser)) { // if user inputs a number in the form
  $tryCounter = 0; // counts amount of tries in session
  $numberByProgram = rand(1,10);
  } else if ($numberFromUser > $numberByProgram) {
    $message = $numberFromUser." is too high, try a smaller number.";
    $tryCounter++; // adds to try count
  } else if ($numberFromUser < $numberByProgram) {
    $message = $numberFromUser." is too small, try a larger number.";
    $tryCounter++;
  } else {
    $tryCounter++;
    $message = "Your ".$numberFromUser." matches ".$numberByProgram."!<br>Yay it only took you ".$tryCounter." guess(es) to get it right" ;
    unset($tryCounter); // resets try count
    $numberByProgram = rand(1,10);
}
?>
<html>
    <head>
      <title>Guess the #</title>
    </head>
    <body>
      <form action="" method="POST">
        <label>Pick a number 1-10:</label>
        <input  type="number"
                name="numberFromUser"
                min="1" max="10">
        <input  type="hidden"
                name="numberByProgram"
                value="<?php echo $numberByProgram; ?>">
        <button type="submit">Go</button>
      </form>
      <?php echo $message; ?>
    </body>
</html>
