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

function drawStars($amount = 5){
  $totalStars = (range(1, $amount));
  foreach ($totalStars as $value){
    echo str_repeat("* ", $value) . "<br>";
  }
}
drawStars(8);
?>
