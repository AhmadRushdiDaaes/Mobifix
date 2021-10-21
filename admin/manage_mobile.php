<?php
include '../includes/connection.php';
if (isset($_POST['submit'])) {
 
    // get data from webform 
    $mobile_name = $_POST['mobile_name'];
    
    $category_id	= $_POST['mobile_category'];

    $query = "insert into mobile_type(mobile_name,category_id)
              values(' $mobile_name','$category_id')";
    // perform query 
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
                        <div class="card-header">Creat Mobile</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Mobile</h3>
                            </div>
                            <hr>
                            <form action="" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Mobile Name</label>
                                    <input id="cc-pament" name="mobile_name" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                </div>

                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Category Name</label>
                                    <select id="cc-pament" name="mobile_category" class="form-control">
                                        <?php
                                        $query = "select * from category";
                                        $result = mysqli_query($con, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<option value='{$row['category_id']}'>{$row['category_name']}</option>";
                                        }
                                        ?>
                                    </select>
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
                        <th>Mobile id</th>
                        <th>Mobile name</th>
                        
                         <th>edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    $query = "select * from mobile_type";
                    $result = mysqli_query($con, $query);
                    while ($mobileSet = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>{$mobileSet['mobile_id']}</td>";
                        echo "<td>{$mobileSet['mobile_name']}</td>";
                        

                        echo "<td><a href='edit_mobile.php?mobile_id={$mobileSet['mobile_id']}'>Edit</a></td>";
                        echo "<td><a href='delete_mobile.php?mobile_id={$mobileSet['mobile_id']}'>Delete</a></td>";
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