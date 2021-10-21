<?php include "../includes/connection.php";

$query="delete from category where category_id={$_GET['category_id']}";
mysqli_query($con, $query);
header("location:manage_category.php");
?>