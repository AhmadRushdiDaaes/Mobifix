

<?php
include '../includes/connection.php';

?>











<?php include '../includes/admin_header.php'; ?>






<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			


				<div class="table-responsive m-b-40">
					<table class="table table-borderless table-data3">
						<thead>
							<tr>
								<th>ID</th>
								
								<th>Full name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
								<th>Add</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>

							<?php 
							$query = "select * from register_fixer";
							$result = mysqli_query($con, $query);
							while($requestSet = mysqli_fetch_assoc($result)){
								echo "<tr>";
								echo "<td>{$requestSet['request_id']}</td>";
								echo "<td>{$requestSet['request_name']}</td>";
								echo "<td>{$requestSet['request_phone']}</td>";
								echo "<td>{$requestSet['request_email']}</td>";
								echo "<td>{$requestSet['request_address']}</td>";
								echo "<td><a href='add_fixer.php?request_id={$requestSet['request_id']}'>Add</a></td>";
								echo "<td><a href='delete_fixer_registration.php?request_id={$requestSet['request_id']}'>Delete</a></td>";
								echo "</tr>";
							}
							?>
						</tbody>
					</table>
				</div>
				<!-- END DATA TABLE-->


			</div>
		</div>

		<?php include '../includes/admin_footer.php'; ?>