

<?php
include '../includes/connection.php';
if (isset($_GET['request_id'])) {
$query  = "select * from register_fixer where request_id = {$_GET['request_id']}";
$result = mysqli_query($con, $query);
$requestSet = mysqli_fetch_assoc($result);
	
}


if (isset($_POST["submit"])) {
	$fixer_name = $_POST["fixer_name"];
	$fixer_phone = $_POST["fixer_phone"];
    $fixer_email = $_POST["fixer_email"];
    $fixer_address = $_POST["fixer_address"];
    $fixer_password = $_POST["fixer_password"];
	$query = "insert into fixer(fixer_name,fixer_email,fixer_phone,fixer_address,fixer_password)
	         values('$fixer_name','$fixer_email','$fixer_phone','$fixer_address','$fixer_password')";

	mysqli_query($con, $query);
	
}
?>











<?php include '../includes/admin_header.php'; ?>






<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">fixers </div>
						<div class="card-body">
							<div class="card-title">
								<h3 class="text-center title-2">Creat New Fixer</h3>
							</div>
							<hr>
							<form action="" method="post" novalidate="novalidate">
								<div class="form-group">
									<label for="cc-number" class="control-label mb-1">Full name</label>
									<input id="cc-number" name="fixer_name" type="text" class="form-control cc-number identified visa"  data-val="true"
									value=
                                    "<?php if(isset($_GET['request_id'])){
                                     echo $requestSet['request_name']; }?>"
									 


									
									data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
									autocomplete="cc-number">
									<span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
								</div>
								 <div class="form-group">
									<label for="cc-payment" class="control-label mb-1">mobile phone</label>
									<input id="cc-pament" name="fixer_phone" type="text" class="form-control" aria-required="true" aria-invalid="false"
                                     value=
                                    "<?php if(isset($_GET['request_id'])){
                                     echo $requestSet["request_phone"]; }?>"
									 
								</div>
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">email</label>
									<input id="cc-pament" name="fixer_email" type="text" class="form-control" aria-required="true" aria-invalid="false" 
                                    value=
                                    "<?php if(isset($_GET['request_id'])){
                                     echo $requestSet["request_email"]; }?>"
									

                                    
									 
									>
								</div>
                                <div class="form-group">
									<label for="cc-payment" class="control-label mb-1">address</label>
									<input id="cc-pament" name="fixer_address" type="text" class="form-control" aria-required="true" aria-invalid="false" 
                                    value="<?php if(isset($_GET['request_id'])){
                                     echo $requestSet["request_address"];} ?>"
									 


									
									
								</div>
								<div class="form-group has-success">
									<label for="cc-name" class="control-label mb-1">password</label>
									<input id="cc-name" name="fixer_password" type="password" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
									autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
									<span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
								</div>
								
								
								<div>
									<button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
										<i class="fa fa-lock fa-lg"></i>&nbsp;
										<span id="payment-button-amount">Save</span>
										<span id="payment-button-sending" style="display:none;">Sending…</span>
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
            </div>
        </div>

				<div class="table-responsive m-b-40">
					<table class="table table-borderless table-data3">
						<thead>
							<tr>
								<th>ID</th>
								<th>Full name</th>
								<th>Mobile Phone</th>
								<th>Email</th>
								<th>address</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>

							<?php 
							$query = "select * from fixer";
							$result = mysqli_query($con, $query);
							while($fixerSet = mysqli_fetch_assoc($result)){
								echo "<tr>";
								echo "<td>{$fixerSet['fixer_id']}</td>";
								echo "<td>{$fixerSet['fixer_name']}</td>";
								echo "<td>{$fixerSet['fixer_phone']}</td>";
								echo "<td>{$fixerSet['fixer_email']}</td>";
								echo "<td>{$fixerSet['fixer_address']}</td>";
								echo "<td><a href='edit_fixer.php?fixer_id={$fixerSet['fixer_id']}'>Edit</a></td>";
								echo "<td><a href='delete_fixer.php?fixer_id={$fixerSet['fixer_id']}'>Delete</a></td>";
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