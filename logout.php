<?php
    setcookie("username","", time() - 3600);
    header("Location: ./index.php?errCode=2");
?>