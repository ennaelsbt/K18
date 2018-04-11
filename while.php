<?php
function arrayAlphabeticalSort($array) {
  natcasesort($array);
  echo implode(", ", $array) . "<br>";
}

$alphas = array('yksi', 'kaksi', 'kolme', 'neljä', 'viisi', 'seitsemän');
$betas = array('b', 'd', 'x', 'z', 'g', 'p');
$abcs = array('a', 'c', 'b');

arrayAlphabeticalSort($alphas);
arrayAlphabeticalSort($betas);
arrayAlphabeticalSort($abcs);

?>
<html>
    <head>
      <title>While something something AND something</title>
    </head>
    <body>

    </body>
</html>
