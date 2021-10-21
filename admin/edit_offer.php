<?php
include '../includes/connection.php';
$query  = "select * from special_offers where offer_id = {$_GET['offer_id']}";
$result = mysqli_query($con, $query);
$offerSet = mysqli_fetch_assoc($result);


if (isset($_POST['submit'])) {
    
    // get data from webform 
    $offer_name = $_POST['offer_name'];
    $offer_description1 = $_POST['offer_description1'];
    $offer_description2 = $_POST['offer_description2'];
    $offer_description3 = $_POST['offer_description3'];
    $offer_description4 = $_POST['offer_description4'];
    $offer_price = $_POST['offer_price'];
    
     $query = "update special_offers set offer_name='$offer_name',
                            offer_description1='$offer_description1',
                            offer_description2='$offer_description2',
                            offer_description3='$offer_description3',
                            offer_description4='$offer_description4',
                            offer_price=$offer_price
                            where offer_id = {$_GET['offer_id']}";
 
    // perform query 
    mysqli_query($con, $query);

    header("location:special_offers.php");
}
?>














<?php include '../includes/admin_header.php';?>




<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">Edit Offer</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Special Offers</h3>
                            </div>
                            <hr>
                            <form action="" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Offer name</label>
                                    <input id="cc-pament" name="offer_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $offerSet["offer_name"];?>"  >
                                </div>

                                

                                
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Offer description</label>
                                    <input id="cc-number" name="offer_description1" type="tel" class="form-control cc-number identified visa" value="<?php echo $offerSet["offer_description1"];?>" data-val="true"
                                           data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                           autocomplete="cc-number">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Offer description</label>
                                    <input id="cc-number" name="offer_description2" type="tel" class="form-control cc-number identified visa" value="<?php echo $offerSet["offer_description2"];?>" data-val="true"
                                           data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                           autocomplete="cc-number">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Offer description</label>
                                    <input id="cc-number" name="offer_description3" type="tel" class="form-control cc-number identified visa" value="<?php echo $offerSet["offer_description3"];?>" data-val="true"
                                           data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                           autocomplete="cc-number">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Offer description</label>
                                    <input id="cc-number" name="offer_description4" type="tel" class="form-control cc-number identified visa" value="<?php echo $offerSet["offer_description4"];?>" data-val="true"
                                           data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                           autocomplete="cc-number">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Offer Price</label>
                                    <input id="cc-number" name="offer_price" type="number" class="form-control cc-number identified visa" value="<?php echo $offerSet["offer_price"];?>" data-val="true"
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



                

                        </div>
                    </div>
                </div>




<?php include '../includes/admin_footer.php';?>