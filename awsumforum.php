<?php
    session_start();
    // checks if user is logged in and if not redirects to login:
    if(!isset($_SESSION["login"])) {
        header("LOCATION:awsumforum_login.php"); die();
    }
    // logs out if the user hits logout-button, resets session and redirects
    if(isset($_POST["logout"])){
        $_SESSION["login"] === false;
        unset($_SESSION["username"]);
        session_destroy();
        header("LOCATION:awsumforum_login.php");
     }
?>
<html>
  <head>
    <title>awsum forum</title>
  </head>
  <body>
      <form action="" method="post">
        <p>congrats <?php echo $_SESSION['username'] ?> you are in</p>
        <input  type="submit"
                value="Logout"
                name="logout">
      </form>
  </body>
</html>
