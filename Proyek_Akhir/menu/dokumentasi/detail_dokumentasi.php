

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include('koneksi.php')
$koneksi = "SELECT * FROM pesanan WHERE bukti_transaksi = $bukti_transaksi";
$sth = $db->query($koneksi);
$result=mysqli_fetch_array($sth);
echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>';
?>
</body>
</html>