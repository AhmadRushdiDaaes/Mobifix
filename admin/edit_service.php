<?php
include '../includes/connection.php';
$query = "select * from service where service_id = {$_GET['service_id']}";
$result = mysqli_query($con, $query);
$serviceSet = mysqli_fetch_assoc($result);


if (isset($_POST['submit'])) {




    $path = "../uploades/";
    $tmp_name = $_FILES['service_image']['tmp_name'];
    $file_name = $_FILES['service_image']['name'];
    move_uploaded_file($tmp_name, $path . $file_name);

    // get data from webform 
    $service_name = $_POST['service_name'];
    $service_description = $_POST['service_description'];
    






    $query = "update service set service_name='$service_name',service_description='$service_description',service_image='$file_name' where service_id = {$_GET['service_id']}";
    // perform query 
    mysqli_query($con, $query);
    header("location:manage_services.php");
}
?>









<?php include '../includes/admin_header.php'; ?>



<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">Edit services</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">services</h3>
                            </div>
                            <hr>
                            <form action="" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">service name</label>
                                    <input id="cc-pament" name="service_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $serviceSet["service_name"] ?>">
                                </div>

                                

                               
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">description</label>
                                    <input id="cc-number" name="service_description" type="tel" class="form-control cc-number identified visa" 
                                    value="<?php echo $serviceSet["service_description"] ?>"  
                                     data-val="true"
                                           data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                           autocomplete="cc-number">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">service image</label>
                                    <input id="cc-number" name="service_image" type="file" class="form-control cc-number identified visa" 
                                     
                                    data-val="true"
                                           data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
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