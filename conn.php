<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'richard';

    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error) {
        die('connection failed: ' . $conn->connect_error);
    }

    // 解決亂碼問題跟時區問題
    $conn->query('SET NAMES UTF8');
    $conn->query('SET time_zone = "+8:00"');
?>