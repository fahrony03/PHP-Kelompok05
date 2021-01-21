<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Form Components - Si-PEKA Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="../../css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"> 
	<!-- include summernote css/js-->
	<link href="dist/summernote.css" rel="stylesheet">

</head>
<body>
<div class="container">
<div class="judul">
        <h1>Form Edit Data</h1>
    </div>
    <br>

    <a href="index.php">Lihat Semua Data</a>

    <br>

    <h3>Edit Data</h3>
    <?php
    include ('koneksi.php');
    $id = $_GET['id'];
    $data = $pdo->prepare("SELECT * FROM penanaman WHERE id ='$id'");
    $data->execute();
    while ($x = $data->fetch()) {
    ?>
		<form id="postForm" action="edit.php" method="POST" enctype="multipart/form-data" onsubmit="return postForm()">
			
		<b>judul</b>
      <input type="text" class="form-control" name="title" value="<?=$x['title']; ?>">
      <br>
      <b>Thumbnail</b>
      <input type="hidden" name="gl" class="form-control" value="<?=$x['nama']?>" >
      <input type="hidden" name="id" class="form-control" value="<?=$x['id']?>" >
      <br>
      <input type="file" name="gb" class="form-control">
      <br>
      <textarea id="summernote" name="content" rows="10"><?=$x['content'];?></textarea>
      <br>
			<button type="submit" class="btn btn-success">Save</button>
			<button type="button" id="cancel" class="btn btn-warning">Cancel</button>
      <a class="btn btn-danger" href="index.php" role="button">Kembali</a>
		    
		</form>
    <?php } ?></div>
    <!-- include libries(jQuery, bootstrap) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="dist/summernote.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
	$('#summernote').summernote({
		height: "300px",
		styleWithSpan: false
	});
});
function postForm() {

	$('textarea[name="content"]').html($('#summernote').code());
}
</script>
</body>
</html>

<!-- img src='images/".$data['nama'] -->