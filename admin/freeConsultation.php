<?php include '../includes/connection.php';



 ?>

<?php include '../includes/admin_header.php'; ?>
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
                                               
                                                <th>name</th>
                                                <th>phone</th>
                                                <th>email</th>
                                                <th>subject</th>
                                                <th>image</th>
                                                <th>problem</th>
                                                <th>status</th>
                                                <th>replay</th>
                                                <th>delete</th>
							</tr>
						</thead>
						<tbody>

							<?php 
							$query = "select * from free_consultation";
							$result = mysqli_query($con, $query);
							while($consSet = mysqli_fetch_assoc($result)){
								echo "<tr>";
							                                                                                                             




								echo "<td>{$consSet['consultation_name']}</td>";
								echo "<td>{$consSet['consultation_phone']}</td>";
								echo "<td>{$consSet['consultation_email']}</td>";
								echo "<td>{$consSet['consultation_subject']}</td>";
							     echo "<td> <a href='imageView.php?consultation_id={$consSet['consultation_id']}'target='_blank'>
							      <img src='../uploades/{$consSet['consultation_image']}' ></a></td>";



								
								echo "<td>{$consSet['consultation_problem']}</td>";
	                          
                                  if($consSet['consultation_status']=='processed')
                                  {

                                  echo "<td style='color:#00FF00'>{$consSet['consultation_status']}</td>";
 
                                  }else if($consSet['consultation_status']=='not processed')
                                      {
                                     echo "<td style='color:#FF0000'>{$consSet['consultation_status']}</td>";
                                      }
                            	                            
                            						   
                            	


								echo "<td><a href='replay_email.php?consultation_id={$consSet['consultation_id']}'>Replay</a></td>";
								echo "<td><a href='delete_consultation.php?consultation_id={$consSet['consultation_id']}'>Delete</a></td>";
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