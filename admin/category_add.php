<?php

include("header.php");
include("connection.php");

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
                                <h4 class="card-title">Add Your Categories</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" enctype="multipart/form-data">

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Category Name</label>
                                                <input type="text" name="categoryname" class="form-control" placeholder="Enter Vaccination Category">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Details</label>
                                                <input type="text" name="details" class="form-control" placeholder="Enter Vaccination Details">
                                            </div>
                                            
                                           
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary">Add</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


<?php

if(isset($_POST['submit'])){
    $categoryName = $_POST['categoryname'];
    $details = $_POST ['details'];

    $sql = "insert into category(CAT_Name, Details) values ('$categoryName', '$details')";
    $result = mysqli_query($conn,$sql);

    echo "<script>
    alert('Details Added Successfully');
    window.location.href = 'category_show.php'
    </script>";
}

include("footer.php");

?>