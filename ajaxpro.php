<?php include 'includes/connection.php';?>
<?php
if(isset($_POST['category'])&&!empty($_POST['category'])){
    
   
    $id = $_POST['category'];
    $query = "select * from mobile_type where category_id = $id";
    $do = mysqli_query($con,$query);
    $count = mysqli_num_rows($do);
    
    if($count > 0){
        while ($row = mysqli_fetch_array($do)){
            echo '<option value="'.$row['mobile_id'].'">'.$row['mobile_name'].'</option>';
        }
    }else{
        echo '<option>not mobiles avaliable </option>';
    }
    
    
    
    
    
}else{
    echo '<h1> error </h1>'; 
}


?>