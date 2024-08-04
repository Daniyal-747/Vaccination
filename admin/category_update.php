<?php

include("header.php");
include("connection.php");

$Id = $_GET['id'];
$sql = "select * from category where id = $Id";
$result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_assoc($result);

?>

<div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <span class="ml-1">Element</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
                        </ol>
                    </div>
                </div>

                <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Child Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" enctype="multipart/form-data">

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Category</label>
                                                <input type="text" name="category" value="<?php echo $rows ['CAT_Name'] ?>" class="form-control" placeholder="Enter Your Name">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Details</label>
                                                <input type="text" name="details" value="<?php echo $rows ['Details'] ?>" class="form-control" placeholder="Male/Female">
                                            </div>
                                            
                                           
                                        </div>
                                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<?php

if(isset($_POST['update'])){
$category = $_POST['category'];
$details = $_POST['details'];

$sql = "update category set CAT_Name = '$category' , Details = '$details' where id = $Id";
$result = mysqli_query($conn,$sql);

echo "<script>
alert('Details Updated Successfully!');
window.location.href = 'category_show.php';
</script>";

}

include("footer.php");

?>