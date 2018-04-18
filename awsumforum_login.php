<?php
  session_start();

  $errorMsg = "";
  $validUser = $_SESSION["login"] === true; // checks if user has logged in?

  // if form is submitted
  if(isset($_POST["loginSubmit"])) {
      // saves username submitted by the user in session:
      $_SESSION["username"] = $_POST["user"];
      // if username and password are right saves them in $validUser
      $validUser = $_POST["user"] == "admin" && $_POST["userPassword"] == "password";
      // if username and password are not right and therefore saved, error message appears
      if(!$validUser) {
          $errorMsg = "<p class=\"error-message\"><strong>Whoopsie!</strong> You submitted an invalid username or password.</p>";
        } // if username and password are right and saved login is set true
          else {
          $_SESSION["login"] = true;
        }
  }
  if($validUser) { // same as $validUser == true so doesn't check the type
      header("Location: awsumforum.php"); die();
  }
?>
<html>
  <head>
    <title>awsum forum</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <h1>Awsumforum awaits!</h1>
    <div class="container flex-container flex-container--justify-content">
      <section class="section-container--white">
        <form name="input" action="" method="post">
          <h3>Welcome buddy</h3>
          <div class="error">
            <?php echo $errorMsg ?>
          </div>
          <section class="login-section">
            <input  type="text" value="<?php $_POST["username"] ?>" id="username" name="user" placeholder="Username">
            <input  type="password" value="" id="password" name="userPassword" placeholder="Password">
            <section class="button-section flex-container flex-container--justify-content">
              <input type="submit" value="Login" name="loginSubmit">
            </section>
          </section>
        </form>
      </section>
    </div>
  </body>
</html>
