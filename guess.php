<html>
  <head>
    <title>Guess The #</title>
  </head>
  <body>
    <form action="" method="post">
      <label>Pick a number (1-10)</label><br>
      <input type="number" name="numberInput" min="1" max="10">
      <button type="submit">Yeees</button>
    </form>
    <?php
      $numberByProgram = rand(1, 10);

      function compareValues($a, $b) {
        if ($a > $b) {
          echo "Your guess $a is high - try again";
        } elseif ($a < $b) {
          echo "Your guess $a is low - try again";
        } else {
          echo "Your guess was righthhhtht! Your $a matches my $b";
        }
      }

      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $numberFromUser = ( int )$_POST["numberInput"];
        compareValues($numberFromUser, $numberByProgram);
        var_dump($numberFromUser);
        var_dump($numberByProgram);
      }

    ?>
  </body>
</html>
