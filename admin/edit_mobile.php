
<?php
include '../includes/connection.php';
$query  = "select * from mobile_type where mobile_id = {$_GET['mobile_id']}";
$result = mysqli_query($con, $query);
$mobileSet = mysqli_fetch_assoc($result);


if(isset($_POST['submit'])){
     
$mobile_name = $_POST['mobile_name'];
$mobile_category = $_POST['mobile_category'];
    
    $query = "update mobile_type set mobile_name='$mobile_name',mobile_category='$mobile_category'
        where mobile_id = {$_GET['mobile_id']}";
    // perform query 
    mysqli_query($con, $query);
    header("location:manage_mobile.php");
    
}

?>






<?php include '../includes/admin_header.php'; ?>



<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">Update Mobile</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Mobile</h3>
                            </div>
                            <hr>
                            <form action="" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Mobile Name</label>
                                    <input id="cc-pament" name="mobile_name" type="text" class="form-control" aria-required="true" aria-invalid="false" 
                                    value="<?php echo $mobileSet["mobile_name"] ?>"
                                    >
                                </div>

                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Category Name</label>
                                    <select id="cc-pament" name="mobile_category" class="form-control">
                                        <?php
                                        $query = "select * from category";
                                        $result = mysqli_query($con, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<option value='{$row['category_name']}'>{$row['category_name']}</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                
                                <div>
                                    <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                                        <i class="fa fa-lock fa-lg"></i>&nbsp;
                                        <span id="payment-button-amount">Update</span>
                                        <span id="payment-button-sending" style="display:none;">Sending…</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        


    </div>
</div>










<?php include '../includes/admin_footer.php'; ?>