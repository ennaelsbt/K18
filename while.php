<?php
function arrayAlphabeticalSort($array) {
  natcasesort($array);
  echo implode(", ", $array) . "<br>";
}

$alphas = array('yksi', 'kaksi', 'kolme', 'neljä', 'viisi', 'seitsemän');
$betas = array('b', 'd', 'x', 'z', 'g', 'f');

arrayAlphabeticalSort($alphas);
arrayAlphabeticalSort($betas);

?>
<html>
    <head>
      <title>While something something</title>
    </head>
    <body>

    </body>
</html>
