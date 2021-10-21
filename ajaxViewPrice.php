<?php include 'includes/connection.php';?>
<?php
if(isset($_POST['category'])&&isset($_POST['mobile'])&&isset($_POST['service'])){
    
   
    $cid = $_POST['category'];
    $mid = $_POST['mobile'];
    $sid = $_POST['service'];
    $query =
     "select * from pricing where category_id=$cid and mobile_id =$mid and service_id = $sid";
    $do = mysqli_query($con,$query);
    $count = mysqli_num_rows($do);
    
    if($count > 0){
        while ($row = mysqli_fetch_array($do)){
            echo '<output style="color:#006400;"  id="service_price" name="service_price" 
            value="'.$row['price_id'].'">this service cost :  '.$row['price']. 'JD</output>';
        }
    }else{
        echo '<output style="color:red;" id="service_price" name="service_price"> price not avaliable now ! <br>check if you select service , category and mobile </output>';
    }
    
    
    
    
    
}else{
    echo '<h1> error </h1>'; 
}


?>