<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION);
session_destroy();
header('location:../index.php');
?>