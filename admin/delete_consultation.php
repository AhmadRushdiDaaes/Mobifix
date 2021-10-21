<?php include "../includes/connection.php";

$query="delete from free_consultation where consultation_id={$_GET['consultation_id']}";
mysqli_query($con, $query);
header("location:freeConsultation.php");
?>