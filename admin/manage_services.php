<?php
include '../includes/connection.php';
if (isset($_POST['submit'])) {
    $path = "../uploades/";
    $tmp_name = $_FILES['service_image']['tmp_name'];
    $file_name = $_FILES['service_image']['name'];
    move_uploaded_file($tmp_name, $path . $file_name);

    // get data from webform 
    $service_name = $_POST['service_name'];
    $service_description = $_POST['service_description'];
    
    

    $query = "insert into service(service_name,service_description,service_image)
              values('$service_name','$service_description','$file_name')";
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
                        <div class="card-header">Creat services</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">services</h3>
                            </div>
                            <hr>
                            <form action="" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">service name</label>
                                    <input id="cc-pament" name="service_name" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                </div>

                                

                                
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">description</label>
                                    <input id="cc-number" name="service_description" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                           data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                           autocomplete="cc-number">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">service image</label>
                                    <input id="cc-number" name="service_image" type="file" class="form-control cc-number identified visa" value="" data-val="true"
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




 <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>service id</th>
                        <th>service name</th>
                        <th>service description</th>
                         <th>service image</th>
                         <th>edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    $query = "select * from service";
                    $result = mysqli_query($con, $query);
                    while ($serviceSet = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>{$serviceSet['service_id']}</td>";
                        echo "<td>{$serviceSet['service_name']}</td>";

                        
                        echo "<td>{$serviceSet['service_description']}</td>";

                        echo "<td><img src='../uploades/{$serviceSet['service_image']}' width='200' height='300'></td>";
                        echo "<td><a href='edit_service.php?service_id={$serviceSet['service_id']}'>Edit</a></td>";
                        echo "<td><a href='delete_service.php?service_id={$serviceSet['service_id']}'>Delete</a></td>";
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
