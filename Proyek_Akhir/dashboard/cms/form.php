<html>
<head>
  <title>Form Upload Gambar</title>
</head>
<body>

  <h1>Form Upload Gambar</h1>
  <form method="post" enctype="multipart/form-data" action="upload.php">
    <input type="file" name="gambar">
    <input type="text" name="title">
    <input type="text" name="content">
    <input type="submit" value="Upload">
  </form>
</body>
</html>