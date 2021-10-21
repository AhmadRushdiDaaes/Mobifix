<?php include '../includes/connection.php'; 

$query="delete from special_offers where offer_id={$_GET['offer_id']}";
mysqli_query($con,$query);
header("location:special_offers.php ");


?>