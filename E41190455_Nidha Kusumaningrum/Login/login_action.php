<?php
    $login =  [
        [
            'username' => "Nidha",
            'password' => "123",
        ],
        [
            'username' => "polije",
            'password' => "321",
        ]
    ];
        if($_POST['user'] == $login[0]['username'] && $_POST['pass'] == $login[0]['password']){
                echo $_POST ['user'];
                echo $_POST ['pass'];
                header("Location: dashboard.php");
        }else {
            echo "Username atau password salah";
    }
?>