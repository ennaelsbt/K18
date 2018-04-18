<!--
Tee koodi joka tulostaa mallin mukaisen kuvion,
mutta käyttäjä päättää montako tähteä viimeisellä
rivillä on.
Esim. Jos käyttäjä syöttää numeron 5, tulostuu
näytölle viisi riviä ja 1 - 5 tähteä, näin:

*
* *
* * *
* * * *
* * * * *
-->

<?php
function drawStars($amount){
  $totalLines = (range(1, $amount));
  foreach ($totalLines as $value){
    echo str_repeat("* ", $value) . "<br>";
  }
}

$totalStars = $_POST["userSubmittedNumber"]
?>

<html>
  <head>
    <title>Draw some stars</title>
  </head>
  <body>
    <form action="" method="post">
      <label>How many lines of stars?</label>
      <input type="number" name="userSubmittedNumber">
      <button type="submit">Do it</button>
    </form>
    <?php
      if (isset($totalStars)) {
        echo drawStars($totalStars);
      }
    ?>
  </body>
</html>
