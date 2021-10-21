<?php
include '../includes/connection.php';
if (isset($_POST["submit"])) {
    $customer_name = $_POST["customer_name"];
    $customer_email = $_POST["customer_email"];
    $customer_address = $_POST["customer_address"];
    $category_id = $_POST["customer_category"];
    $customer_phone = $_POST["customer_phone"];
    $service_id = $_POST["service_name"];
    $mobile_id = $_POST["mobile_id"];
    $customer_problem = $_POST["customer_problem"];
    $date_of_service=$_POST["date_of_service"];
    $time_of_service=$_POST["time_of_service"];
    
$query2 = "select price_id  from pricing where mobile_id = $mobile_id and service_id = $service_id and category_id = $category_id ";
$result = mysqli_query($con, $query2);
$row = mysqli_fetch_assoc($result);
    $price_id = $row['price_id'];


   $query =
    "insert into customer(customer_name,customer_email,customer_phone,customer_address,service_id,mobile_id,category_id,customer_problem,customer_date,customer_time,price_id) 
     values('$customer_name','$customer_email','$customer_phone','$customer_address',$service_id,$mobile_id,$category_id,'$customer_problem','$date_of_service','$time_of_service',$price_id)";

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
                        <div class="card-header">Creat Customer</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Customer</h3>
                            </div>
                            <hr>
                            <form action="" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Customer name</label>
                                    <input id="cc-pament" name="customer_name" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Customer email</label>
                                    <input id="cc-pament" name="customer_email" type="email" class="form-control" aria-required="true" aria-invalid="false" >
                                </div>
                                

                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Customer phone</label>
                                    <input id="cc-pament" name="customer_phone" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Customer Address</label>
                                    <input id="cc-pament" name="customer_address" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                </div>

                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Service Name Category and Mobile</label>
                                    <select id="service_name" name="service_name" class="form-control">
                                        <option value disabled selected>choose service</option>
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
                                    
                                    <select id="mobile_category" name="customer_category" class="form-control">
                                        <option value disabled selected>choose category</option>
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
                                   
                                    <select id="mobile_name" name="mobile_id" class="form-control">
                                        <option value disabled selected>choose mobile</option>

                                    </select>
                                </div>

                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Service price</label><br>
                                   <output id="service_price" name="service_price"></output>
                                </div>
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Date of service</label>
                                    <input id="cc-number" name="date_of_service" type="date" class="form-control cc-number identified visa" value="" data-val="true"
                                           data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                           autocomplete="cc-number">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Time of service</label>
                                    <input id="cc-number" name="time_of_service" type="time" class="form-control cc-number identified visa" value="" data-val="true"
                                           data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                           autocomplete="cc-number">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Problem in Details</label>
                                    <input id="cc-pament" name="customer_problem" type="text" class="form-control" aria-required="true" aria-invalid="false" >
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
                        <th>customer id</th>
                        <th>customer name</th>
                        <th>customer email</th>
                        <th>customer phone</th>
                        <th>customer address</th>
                        <th>service name</th>
                        <th>Device category</th>
                        <th>Device name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>service price</th>
                        <th>Problem details</th>
                        
                         <th>fix request</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    $query = "select customer.*,
                              category.category_name,
                              mobile_type.mobile_name,
                              service.service_name,
                              pricing.price
                              from customer 
                    inner join category on category.category_id = customer.category_id
                    inner join mobile_type on mobile_type.mobile_id = customer.mobile_id 
                    inner join service on service.service_id = customer.service_id
                    inner join pricing on pricing.price_id = customer.price_id";
                    
                    $result = mysqli_query($con,$query);
                     
                    while ($customerSet = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>{$customerSet['customer_id']}</td>";
                        echo "<td>{$customerSet['customer_name']}</td>";

                        echo "<td>{$customerSet['customer_email']}</td>";
                        echo "<td>{$customerSet['customer_phone']}</td>";
                        echo "<td>{$customerSet['customer_address']}</td>";
                        echo "<td>{$customerSet['service_name']}</td>";
                        echo "<td>{$customerSet['category_name']}</td>";
                        echo "<td>{$customerSet['mobile_name']}</td>";
                        echo "<td>{$customerSet['customer_date']}</td>";
                        echo "<td>{$customerSet['customer_time']}</td>";
                        echo "<td>{$customerSet['price']}</td>";
                        echo "<td>{$customerSet['customer_problem']}</td>";
                       
                           
                        echo "<td><a href='fix_request.php?customer_id={$customerSet['customer_id']}'>fix request</a></td>";
                        echo "<td><a href='delete_customer.php?customer_id={$customerSet['customer_id']}'>Delete</a></td>";
                        echo "</tr>";
                        }
                    
                    ?>








                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->







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
   
                  $('#mobile_name').html('<option>select category first </option>');
              }
           });
                
           }) ;
        });
        

</script>


<script src="selectElement.js" type="text/javascript"></script>
<script type="text/javascript">

$(function(){
        $("#service_name").on("change",function(){
           var SID =$(this).val(); 
        $("#mobile_category").on("change",function(){
            var CID =$(this).val();
        $("#mobile_name").on("change",function(){
           var MID =$(this).val();
              
           $.ajax({
              method:"POST",
              url:"ajaxViewPrice.php",//default current url
              data:{category:CID,mobile:MID,service:SID},
              success:function(data){
                  $("#service_price").html(data);
                  
              },
              error:function(){
   
                  $('#service_price').html('<output id="service_price" name="service_price" > select service and category first</output>');
              }
           });
                
           }) ;
        });
   });
 });
        

</script>















<?php include '../includes/admin_footer.php'; ?>
