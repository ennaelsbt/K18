<?php
session_start();

$errorMsg = "";
$validUser = $_SESSION["login"] === true;

if(isset($_POST["loginSubmit"])) {
  $_SESSION["username"] = $_POST["user"];
  $validUser = $_POST["user"] == "admin" && $_POST["userPassword"] == "password";
    if(!$validUser) {
      $errorMsg = "Invalid username or password.";
    } else {
      $_SESSION["login"] = true;
    }
}
if($validUser) {
   header("Location: awsumforum.php"); die();
}
?>
<html>
  <head>
    <title>awsum forum</title>
  </head>
  <body>
    <h1>Awsumforum awaits!</h1>

    <form name="input" action="" method="post">
      <label>Welcome buddy</label><br>
      <input  type="text"
              value="<?php $_POST["username"] ?>"
              id="username"
              name="user"
              placeholder="Username"><br>
      <input  type="password"
              value=""
              id="password"
              name="userPassword"
              placeholder="Password"><br>
      <div class="error"><?php echo $errorMsg ?></div>
      <input  type="submit"
              value="Login"
              name="loginSubmit">
    </form>
  </body>
</html>
