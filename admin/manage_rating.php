<?php include '../includes/connection.php';?>
<?php include '../includes/admin_header.php';?>



<!DOCTYPE html>
<html>
<head>

</head>
<body>

<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="table-responsive m-b-40">
					<table class="table table-borderless table-data3">
						<thead>
							<tr>
                                               
                                                <th>First Name</th>
                                                <th>Second Name</th>
                                                <th>phone</th>
                                                <th>email</th>
                                                <th>City</th>
                                                <th>Fixer Name</th>
                                                <th>Review Note</th>
                                                <th>Stars Number</th>
                                                <th>delete</th>
							</tr>
						</thead>
						<tbody>

							<?php 
							$query = "select rate_us.*,fixer.fixer_name from rate_us inner join fixer on fixer.fixer_id = rate_us.fixer_id";
							$result = mysqli_query($con, $query);
							while($rateSet = mysqli_fetch_assoc($result)){
								echo "<tr>";
							                                                                                                             




								echo "<td>{$rateSet['rate_firstName']}</td>";
								echo "<td>{$rateSet['rate_secondName']}</td>";
								echo "<td>{$rateSet['rate_phone']}</td>";
								echo "<td>{$rateSet['rate_email']}</td>";
								echo "<td>{$rateSet['rate_city']}</td>";
								echo "<td>{$rateSet['fixer_name']}</td>";
								echo "<td>{$rateSet['rate_review']}</td>";
								echo "<td>{$rateSet['rate_stars']}</td>";
							    echo "<td><a href='delete_rate.php?rate_id={$rateSet['rate_id']}'>Delete</a></td>";
								echo "</tr>";
							}
							?>
						</tbody>
					</table>
		</div>
	</div>
</div>



<?php include '../includes/admin_footer.php'; ?>


</body>
</html>