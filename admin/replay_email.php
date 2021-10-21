<?php
include '../includes/connection.php';


$query  = "select * from free_consultation where consultation_id = {$_GET['consultation_id']}";
$result = mysqli_query($con, $query);
$consSet = mysqli_fetch_assoc($result);

use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['submit'])){
    // get data from webform 
    $mail_to=$_POST["customer_email"];
    $mail_subject=$_POST["customer_subject"];
    $mail_message=$_POST["message"];
    
    require_once 'PHPMailer/PHPMailer.php ';
    require_once 'PHPMailer/SMTP.php ';
    require_once 'PHPMailer/Exception.php ';

    $mail = new PHPMailer();
    //smtp setting 
    $mail->isSMTP();
    $mail->Host="smtp.gmail.com";
    $mail->SMTPAuth=true;
    $mail->Username="mobifixcomany14@gmail.com";
    $mail->Password="Mobifix12345";
    $mail->Port="465";
    $mail->SMTPSecure ="ssl";


    //emaill settings
    $mail->isHTML(true); 
    $mail->SetFrom("mobifixcomany14@gmail.com");   
    $mail->AddAddress($mail_to);
    $mail->Subject=$mail_subject;
    $mail->Body=$mail_message;
    
    // validation if email sent or not 
    $email_sent = "email sent ";
    $email_notSent = "email maybe not sent";
    if($mail->send())
    {
      $email_sent;
    }
    else
    {
    	$email_notSent;
    }
    $query = "update free_consultation set consultation_status ='processed' where consultation_id = {$_GET['consultation_id']}";
     
    mysqli_query($con, $query);
}
?>




<?php include '../includes/admin_header.php'; ?>


<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">

<form method="post" action="">
  <div class="form-group">
    <label for="exampleFormControlInput1">Customer email address</label>
    <input type="email" name='customer_email' class="form-control" id="exampleFormControlInput1" value="<?php echo $consSet["consultation_email"] ?>">
  </div>
  
<div class="form-group">
    <label for="exampleFormControlInput1">Subject</label>
    <input type="text" class="form-control" name="customer_subject" id="exampleFormControlInput1" placeholder="subject">
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Answer customer here : </label>
    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3">
    	Thank you for choose mobiFix Company .
    	we hope to help you from free consultation feature .



    </textarea>
  </div>

<div class="form-group">
    
    <input type="submit" name='submit'
    value="send" class="btn btn-primary" id="exampleFormControlInput1" >
  </div>

</form>
<?php
if(isset($email_sent))
{
    echo $email_sent;
}else if (isset($email_notSent)) {
    echo $email_notSent;
}

?>



		</div>
	</div>
</div>









<?php include '../includes/admin_footer.php'; ?>