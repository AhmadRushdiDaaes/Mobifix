<?php
include '../includes/connection.php';
$query = "select * from our_experts where expert_id = {$_GET['expert_id']}";
$result =mysqli_query($con, $query);
$expertSet=mysqli_fetch_assoc($result);


if (isset($_POST['submit'])) {

    $path = "../uploades/";
    $tmp_name = $_FILES['expert_image']['tmp_name'];
    $file_name = $_FILES['expert_image']['name'];
    move_uploaded_file($tmp_name, $path . $file_name);

    // get data from webform 
    $expert_name = $_POST['expert_name'];
    $expert_position = $_POST['expert_position'];
    $expert_description = $_POST['expert_description'];
    
    $query = "update our_experts set expert_name='$expert_name',expert_description='$expert_description',expert_photo='$file_name',expert_position='$expert_position' where expert_id = {$_GET['expert_id']}";
    // perform query 
    mysqli_query($con, $query);
    header("location:our_experts.php");
}
?>









<?php include '../includes/admin_header.php'; ?>



<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">Edit Experts</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Experts</h3>
                            </div>
                            <hr>
                            <form action="" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Expert name</label>
                                    <input id="cc-pament" name="expert_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $expertSet['expert_name'] ?>">
                                </div>

                                

                               
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">expert Position</label>
                                    <input id="cc-number" name="expert_position" type="tel" class="form-control cc-number identified visa" 
                                    value="<?php echo $expertSet["expert_position"] ?>"  
                                     data-val="true"
                                           
                                           autocomplete="cc-number">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>

                                 <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Expert Description</label>
                                    <input id="cc-number" name="expert_description" type="tel" class="form-control cc-number identified visa" 
                                    value="<?php echo $expertSet["expert_description"] ?>"  
                                     data-val="true"
                                           
                                           autocomplete="cc-number">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>

                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Expert image</label>
                                    <input id="cc-number" name="expert_image" type="file" class="form-control cc-number identified visa" 
                                     
                                    data-val="true"
                                           
                                           autocomplete="cc-number">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
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
<?php include '../includes/admin_footer.php'; ?>