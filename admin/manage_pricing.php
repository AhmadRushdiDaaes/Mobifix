<?php
include '../includes/connection.php';
if (isset($_POST['submit'])) {
 
    // get data from webform 
    
    $category_id= $_POST['mobile_category'];
    $mobile_id = $_POST['mobile_name'];
    $service_id	= $_POST['service_name'];
    $price = $_POST['price'];
    $query = "insert into Pricing(mobile_id,category_id,service_id,price)
              values(' $mobile_id','$category_id','$service_id',$price)";
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
                                    <input id="cc-pament" name="price" type="text" class="form-control" aria-required="true" aria-invalid="false" >
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













<div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>category </th>
                        <th>mobile</th>
                        <th>service</th>
                        <th>price</th>
                        <th>edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>

<?php
$query = "select pricing.*,
                category.category_name,
                 mobile_type.mobile_name,
                 service.service_name
                 from pricing inner join category on category.category_id = pricing.category_id inner join mobile_type on mobile_type.mobile_id = pricing.mobile_id 
                     inner join service on service.service_id = pricing.service_id";

$result=mysqli_query($con,$query);
while($priceSet = mysqli_fetch_assoc($result)) {


echo "<tr>";
 echo "<td>{$priceSet['category_name']}</td>";
echo "<td>{$priceSet['mobile_name']}</td>";
echo "<td>{$priceSet['service_name']}</td>";
echo "<td>{$priceSet['price']}</td>";

echo "<td><a href='edit_price.php?price_id={$priceSet['price_id']}'>Edit</a></td>";
echo "<td><a href='delete_price.php?price_id={$priceSet['price_id']}'>Delete</a></td>";
echo "</tr>";


}










?>








                </tbody>
            </table>
        </div>
       </div>
     </div>
 </div>
        










<?php include '../includes/admin_footer.php'; ?>



