<html>
<head>  
<title>Input Data</title>
</head>
<body>
<h1>Tambah Data Siswa</h1>  
<form method="post" action="action_input.php">    
    <table cellpadding="8">      
    <tr>        
        <td>NIM</td>        
        <td><input type="text" name="nim"></td>      
    </tr>
    <tr>        
        <td>Nama</td>        
        <td><input type="text" name="nama"></td>      
    </tr>     
    <tr>        
        <td>Jenis Kelamin</td>        
        <td>
        <input type="radio" name="jenis_kelamin" 
        value="Laki-laki"> Laki-laki        
        <input type="radio" name="jenis_kelamin" 
        value="Perempuan"> Perempuan        
        </td>      
    </tr>      
    <tr>
        <td>Alamat</td>        
        <td><textarea name="alamat"></textarea></td>       
    </tr>      
    <tr>
        <td>Telepon</td>        
        <td><input type="text" name="telp"></td>      
    </tr>    
</table>    
<hr>    
        <input type="submit" value="Simpan">    
        <a href="lihat_data.php"><input type="button" 
        value="Batal"></a>  
</form>
</body>
</html>