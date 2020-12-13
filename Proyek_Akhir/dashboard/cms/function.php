<?php
    include ('koneksi.php');
    function getPosts(){
        $query = mysqli_query($connect, "SELECT * FROM infromasi") or die(mysqli_error());
    
    }
?>