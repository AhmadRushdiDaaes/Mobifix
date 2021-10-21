<?php include "../includes/connection.php";

$query="delete from register_fixer where request_id={$_GET['request_id']}";
mysqli_query($con, $query);
header("location:manage_fixer_registration.php");
?>