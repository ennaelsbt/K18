<!DOCTYPE html>
<html>
<head>
  <title>Gallery</title>
</head>
<body>

    <form action="save.php" enctype="multipart/form-data" method="POST">
      <input type="text" name="imageName" placeholder="Name your image" required />
      <input type="file" name="submittedImage" required />
      <input type="submit" name="submit" value="Upload" />
    </form>

</body>
</html>
