<?php

include("header.php");
include("connection.php");

$sql = "select * from category";
$result = mysqli_query($conn,$sql);

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

 <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <p class="mb-0">Your business dashboard template</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Bootstrap</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Category</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-sm table-bordered text-center">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Category</th>
                                                <th>Details</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>

                                            <?php  

                                            while($rows = mysqli_fetch_assoc($result)){
                                                                                        
                                            ?>
                                               
                                            <td><?php  echo $rows['id'] ?></td>
                                            <td><?php  echo $rows['CAT_Name'] ?></td>
                                            <td><?php  echo $rows['Details'] ?></td>

                                            <td><a href="category_update.php?id=<?php echo $rows ['id'] ?>" class="btn btn-primary">Edit <i class="bi bi-pencil-square"></i></a></td>
                                            <td><a href="category_delete.php?id=<?php echo $rows ['id'] ?>" class="btn btn-danger">Delete <i class="bi bi-trash3-fill"></i></a></td>
                                               
                                            </tr>

                                            <?php } ?>  
                                                                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php

include("footer.php");

?>