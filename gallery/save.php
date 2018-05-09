<!DOCTYPE html>
<html>
<head>
  <title>Gallery</title>
</head>
<body>
<h1>Your picture gallery!</h1>
<?php

$uploadDir = 'uploads/';
$uploadFile = $uploadDir . basename($_FILES['submittedImage']['name']);

if (!move_uploaded_file($_FILES['submittedImage']['tmp_name'], $uploadFile)) {
    echo "Possible file upload attack!\n";
}

$imageName = $_POST['imageName'];
$imageFilename = $_FILES['submittedImage']['name'];
$imageType = $_FILES['submittedImage']['type'];
$imageSize = $_FILES['submittedImage']['size'];

$connection = new mysqli("localhost:8889", "root", "root", "gallery");
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

$uploadQuery = "INSERT INTO pictures (imageName, filename, type, path, size)
VALUES ('$imageName', '$imageFilename', '$imageType', '$uploadFile', '$imageSize')";

if ($connection->query($uploadQuery) === TRUE) {
  echo "Your picture was uploaded successfully.";
}

$getPictures = "select filename from pictures";
$queryResult = mysqli_query($connection, $getPictures)
or die("Virhe: " . mysqli_error($connection));
  while($tableRow=mysqli_fetch_array($queryResult)) {
    echo '<img src="uploads/' . $tableRow["filename"] . '">';
  } $connection->close();


?>

</body>
</html>
