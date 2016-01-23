<?php
session_start();
unset($_SESSION['mobileuser']);
unset($_SESSION['mobileuserid']);
header("Location:index.php");
?>