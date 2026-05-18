<?php 
    $conn = mysqli_connect('localhost', 'root', '1234', 'light_cavalry');
    if($conn) {
        mysqli_query($conn, "SET NAMES 'utf8'");
    }else{
        die("Kết nối không thành công.");
    }
?>