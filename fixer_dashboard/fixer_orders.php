<?php include '../includes/fixer_header.php';?>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">

<div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        
                        <th>customer name</th>
                        <th>customer email</th>
                        <th>customer phone</th>
                        <th>customer address</th>
                        <th>customer service</th>
                        <th>customer category</th>
                        <th>customer mobile</th>
                        <th>customer problem</th>
                        <th>customer date</th>
                        <th>customer time</th>
                        <th>price</th>
                        <th>status</th>
                        <th>send email </th>
                    </tr>
                </thead>
                <tbody>

<?php 



include '../includes/connection.php';
$fixer_id = $_SESSION['fixer_id'];

$query = "select customer.*,
          category.category_name,
          mobile_type.mobile_name,
          service.service_name,
          pricing.price
          from customer 
          inner join category on category.category_id = customer.category_id
          inner join mobile_type on mobile_type.mobile_id = customer.mobile_id 
          inner join service on service.service_id = customer.service_id
          inner join pricing on pricing.price_id = customer.price_id 
          where fixer_id = $fixer_id ";




$result = mysqli_query($con, $query);
while ($customerSet = mysqli_fetch_assoc($result)){
  
 echo "<tr>";

echo "<td>{$customerSet['customer_name']}</td>";

echo "<td>{$customerSet['customer_email']}</td>";
echo "<td>{$customerSet['customer_phone']}</td>";
echo "<td>{$customerSet['customer_address']}</td>";
echo "<td>{$customerSet['service_name']}</td>";
echo "<td>{$customerSet['category_name']}</td>";
echo "<td>{$customerSet['mobile_name']}</td>";
echo "<td>{$customerSet['customer_problem']}</td>";

echo "<td>{$customerSet['customer_date']}</td>";
echo "<td>{$customerSet['customer_time']}</td>";
echo "<td>{$customerSet['price']}</td>";


 if($customerSet['status']=='processed'){
echo "<td style='color:#00FF00'>{$customerSet['status']}</td>";
}
else if($customerSet['status']=='not processed'){
 echo "<td style='color:#FF0000'>{$customerSet['status']}</td>";
                                      }



echo "<td><a href='thanx_email.php?customer_id={$customerSet['customer_id']}'>thanks customer</a></td>";                       
echo "</tr>";

}

?>



                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->


    </div>
</div>








<?php include '../includes/fixer_footer.php';?>