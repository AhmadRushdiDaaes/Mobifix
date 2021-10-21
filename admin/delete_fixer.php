<?php include "../includes/connection.php";

$query="delete from fixer where fixer_id={$_GET['fixer_id']}";
mysqli_query($con, $query);
header("location:add_fixer.php");
?>