<?php include "../includes/connection.php";

$query="delete from our_experts where expert_id={$_GET['expert_id']}";
mysqli_query($con, $query);
header("location:our_experts.php");
?>