<?php include'public_header.php'?>


<?php
include_once 'connection.php';

//Fetch rating deatails from database
$query = "SELECT rating_number, FORMAT((total_points / rating_number),1) as average_rating FROM view_rating WHERE post_id = 1 AND status = 1";
$result = $db->query($query);
$ratingRow = $result->fetch_assoc();

?>


<?php
include 'includes/connection.php';
if(isset($_POST['submit'])){
    $first_name  =$_POST['first_name'];
    $second_name =$_POST['second_name'];
    $email       =$_POST['email'];
    $phone       =$_POST['phone'];
    $fixer_id    =$_POST['fixer_id'];
    $city        =$_POST['city'];
    $note        =$_POST['note'];
    $rating      =$_POST['rating'];

   

$query = "insert into rate_us(rate_firstName,rate_secondName,rate_email,fixer_id,rate_phone,rate_city,rate_stars,rate_review)
    values('$first_name','$second_name','$email',$fixer_id,'$phone','$city','$rating','$note')";
    mysqli_query($con,$query);
}

?>

<div class="page-header--section text-center">
            <!-- Page Title Start -->
            <div class="page--title pd--130-0" data-bg-img="img/mobifix_background/mobifix-13.png">
               
            </div>
            <!-- Page Title End -->

            <!-- Page Breadcrumb Start -->
            <div class="page--breadcrumb font--secondary">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="index.php">MobiFix</a></li>
                        <li class="active"><span>Rate Us</span></li>
                    </ul>
                </div>
            </div>
            <!-- Page Breadcrumb End -->
        </div>


 <div class="page-header--section text-center">
            <!-- Page Title Start -->
          
            <!-- Page Breadcrumb End -->
        </div>
        <!-- Page Header Section End -->

        <!-- Checkout Section Start -->
        <div class="checkout--section pd--100-0-40">
            <div class="container">
                <!-- Checkout Info Start -->
                <div class="checkout--info">
                    

                   
                </div>
                <!-- Checkout Info End -->

                <!-- Checkout Info End -->

                <!-- Checkout Form Start -->
                <div class="checkout--form" data-form-validation="true">
                    <form action="" method="post">
                        <div class="row pt--80">
                            <!-- Checkout Billing Info Start -->
                            <div class="checkout--billing-info col-md-6">
                                <h2 class="checkout--form-title h4">Your Information</h2>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>
                                                <span>First Name <em>*</em></span>

                                                <input type="text" name="first_name" class="form-control" required>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>
                                                <span>Last Name <em>*</em></span>

                                                <input type="text" name="second_name" class="form-control" required>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>
                                                <span>E-mail Address <em>*</em></span>

                                                <input type="email" name="email" class="form-control" required>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>
                                                <span>Phone<em>*</em></span>

                                                <input type="text" name="phone" class="form-control">
                                            </label>
                                        </div>
                                    </div>
                                 </div>


                                <div class="form-group">
                                    <label>
                                        <span>Fixer Name</span>

                                        <select name="fixer_id" class="form-control">
                                            
                                                    <option disabled selected>Select Fixer Name</option>
                                                    <?php
                                                    include 'includes/connection.php';
                                                    $query = "select * from fixer ";
                                                    $result = mysqli_query($con, $query);
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                     echo "<option value='{$row['fixer_id']}'>{$row['fixer_name']}</option>";
                                                    }

                                                     ?>
                                        </select>
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label>
                                        <span>City</span>

                                        <select name="city" class="form-control">
                                            
                                                    <option>Amman</option>
                                                    <option>Zarqa</option>
                                                    <option>Salt</option>
                                                    <option>Irbid</option>
                                                    <option>Aqaba</option>
                                                    <option>Madba</option>
                                                    <option>Kark</option>
                                                    <option>Jarash</option>
                                                    <option>Ajloun</option>
                                        </select>
                                    </label>
                                </div>


                               

                               
                            </div>
                            <!-- Checkout Billing Info End -->

                            <!-- Checkout Order Info Start -->
                            <div class="checkout--order-info col-md-6">
                                <h2 class="checkout--form-title h4">Your Rate And Review</h2>

                                
                                 
                                         <div class="panel-group">
                                    <label>
                                        <span>Your Review And Note</span>
                                        
                                        <textarea style="width: 550px" name="note" class="form-control" placeholder="Note about your order, e.g. special notes for delivery." required></textarea>
                                    </label>
                                </div>
                                <input name="rating" value="0" id="rating_star" type="hidden" postID="1" />
                               <div class="overall-rating">(Average Rating <span id="avgrat"><?php echo $ratingRow['average_rating']; ?></span>
                              Based on <span id="totalrat"><?php echo $ratingRow['rating_number']; ?></span>  rating)</span>
                                

                                <div class="panel-group" id="checkoutA">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <label for="checkoutPaymentInput01" data-toggle="collapse"  data-parent="#checkoutA">
                                                    

                                                    <span class="font--secondary">Thanks</span>
                                                </label>
                                            </h3>
                                        </div>


                                        <div id="checkoutPayment01" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <blockquote>
                                                    <p>Mobifix Thank you for rate us and we hope to improve ourself for you </p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel">
                                        

                                        <div id="checkoutPayment02" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <img src="img/checkout-img/payment-methods.jpg" alt="" data-rjs="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="checkout--submit-btn">
                                    <input type="submit" name="submit" class="btn btn-default" value="Send Your Review Now">
                                    
                                </div>
                            </div>
                            <!-- Checkout Order Info End -->
                        </div>
                    </form>
                </div>
                <!-- Checkout Form End -->
            </div>
        </div>















    
    
<?php include'public_footer.php'?>


<link href="css_r/rating.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="js_r/rating.js"></script>
<script language="javascript" type="text/javascript">
$(function() {
    $("#rating_star").spaceo_rating_widget({
        starLength: '5',
        initialValue: '',
        callbackFunctionName: 'processRating',
        imageDirectory: 'img_r/',
        inputAttr: 'post_id'
    });
});

function processRating(val, attrVal){
    $.ajax({
        type: 'POST',
        url: 'rating.php',
        data: 'post_id=1&points='+val,
        dataType: 'json',
        success : function(data) {
            if (data.status == 'ok') {
                alert('You have rated '+val+' to Mobifix');
                $('#avgrat').text(data.average_rating);
                $('#totalrat').text(data.rating_number);
            }else{
                alert('please after some time.');
            }
        }
    });
}
</script>
<style type="text/css">
    .overall-rating{font-size: 14px;margin-top: 5px;color: #8e8d8d;}
</style>



