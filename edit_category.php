
<?php
include '../includes/connection.php';
$query  = "select * from category where category_id = {$_GET['category_id']}";
$result = mysqli_query($con, $query);
$categorySet = mysqli_fetch_assoc($result);


if(isset($_POST['submit'])){
    // get data from webform 
    $category_name = $_POST['category_name'];
    
    $query = "update category set category_name='$category_name'
        where category_id = {$_GET['category_id']}";
    // perform query 
    mysqli_query($con, $query);
    header("location:manage_category.php");
    
}

?>


<?php include '../includes/admin_header.php'; ?>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>update</strong> category
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" class="form-inline">
                                <div class="form-group">
                                    <label for="exampleInputName2" class="pr-1  form-control-label">Name of category: </label>
                                    <input type="text" name="category_name" id="exampleInputName2"   class="form-control"
                                           value="<?php echo $categorySet["category_name"]?>">
                                </div>

                            
                        </div>
                        <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> update
                            </button>

                        </div>
</form>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</div>
<?php include '../includes/admin_footer.php'; ?>