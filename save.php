<?php

$uploadDir = 'uploads/';
$uploadFile = $uploadDir . basename($_FILES['submittedImage']['name']);

$imageName = $_POST['imageName'];
$imageFilename = $_FILES['submittedImage']['name'];
$imageType = $_FILES['submittedImage']['type'];
$imageSize = $_FILES['submittedImage']['size'];

$servername = "localhost:8889";
$username = "root";
$password = "root";
$dbname = "gallery";
$connection = new mysqli($servername, $username, $password, $dbname);
  if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  }

$uploadQuery = "INSERT INTO pictures (imageName, filename, type, size)
VALUES ('$imageName', '$imageFilename', '$imageType', '$imageSize')";

if ($connection->query($uploadQuery) === TRUE) {
  $queryResult = mysqli_query($connection, $uploadQuery)
    or die("Virhe: " . mysqli_error($connection));
  }
  // $queryResult = mysql_query($uploadQuery) or die(mysql_error());
  $connection->close();

if (move_uploaded_file($_FILES['submittedImage']['tmp_name'], $uploadFile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}
echo 'Here is some more debugging info:';
print_r($_FILES);
?>
