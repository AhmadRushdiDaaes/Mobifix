<?php
session_start();
unset($_SESSION['fixer_id']);
header("location:login_fixer.php");

?>