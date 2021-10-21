<?php
include '../includes/connection.php';

$query  = "select * from pricing where price_id = {$_GET['price_id']}";
$result = mysqli_query($con, $query);
$priceSet = mysqli_fetch_assoc($result);



if (isset($_POST['submit'])) {
 
    // get data from webform 
    
    $category_id= $_POST['mobile_category'];
    $mobile_id = $_POST['mobile_name'];
    $service_id	= $_POST['service_name'];
    $price = $_POST['price'];
   
 $query = "update pricing set category_id='$category_id',mobile_id='$mobile_id',service_id='$service_id',price= $price where price_id = {$_GET['price_id']}";
    // perform query 
    mysqli_query($con, $query);
    header("location:manage_pricing.php");
    





}
?>





<?php include '../includes/admin_header.php'; ?>



<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">Creat Price</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Pricing</h3>
                            </div>
                            <hr>
                            <form action="" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                

                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Category Name</label>
                                    <select id="mobile_category" name="mobile_category" class="form-control">
                                        <option value disabled selected> Select Category</option>
                                        <?php
                                        $query = "select * from category";
                                        $result = mysqli_query($con, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<option value='{$row['category_id']}'>{$row['category_name']}</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                 
                                 <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Mobile Name</label>
                                    <select id="mobile_name" name="mobile_name" class="form-control">
                                      <option value disabled selected> Select Mobile </option>
                                        
                                    </select>
                                </div>


                                <div class="form-group">
                                     <label for="cc-payment" class="control-label mb-1">Service Name</label>
                                    <select id="cc-pament" name="service_name" class="form-control">
                                     <option value disabled selected> Select Service </option>    

                                        <?php
                                        $query = "select * from service";
                                        $result = mysqli_query($con, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<option value='{$row['service_id']}'>{$row['service_name']}</option>";
                                        }
                                        ?>
                                    </select>
                                </div>


                                 <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Price</label>
                                    <input id="cc-pament" name="price" type="text" class="form-control" aria-required="true" aria-invalid="false"
                                    value="<?php echo $priceSet["price"] ;  ?>" >
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
     </div>
 </div>
        


<script src="selectElement.js" type="text/javascript"></script>
<script type="text/javascript">

$(function(){
           $("#mobile_category").on("change",function(){
            var CID =$(this).val();
           $.ajax({
              method:"POST",
              url:"ajaxpro.php",//default current url
              data:{category:CID},
              success:function(data){
                  $("#mobile_name").html(data);
                  
              },
              error:function(){
   
                  $('#mobile_name').html('<option> select Category first </option>');
              }
           });
                
           }) ;
        });
        

</script>














<?php include '../includes/admin_footer.php'; ?>



