<?php
    session_start();
    require_once('./conn.php');
    
    session_destroy();
    // redirect to index.php
    header("Location: ./index.php");
?>