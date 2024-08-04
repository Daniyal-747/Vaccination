<?php

include("header.php");
include("connection.php");
                                       
$sql = "select vaccine_availability .*, vaccine_detail.Vaccine_Name, users.Username from vaccine_availability inner join users on users.id = vaccine_availability.USER_ID_FK inner join vaccine_detail on vaccine_detail.id = vaccine_availability.VACCINE_ID_FK";
$result = mysqli_query($conn, $sql);

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
                                <h4 class="card-title">Vaccines Availability</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-sm table-bordered text-center">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Username</th>
                                                <th>Vaccine</th>
                                                <th>Status</th>
                                                <th>Hospital</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>

                                            <?php

                                               while($rows = mysqli_fetch_assoc($result)){

                                                ?>

                                                <td><?php echo $rows ['id'] ?></td>
                                                <td><?php echo $rows ['Username'] ?></td>
                                                <td><?php echo $rows ['Vaccine_Name'] ?></td>
                                                <td><?php echo $rows ['Status'] ?></td>
                                                <td><?php echo $rows ['Hospital'] ?></td>
                                   
                                                <td><a href="vacc_availability_update.php?id=<?php echo $rows ['id'] ?>" class="btn btn-primary">Edit <i class="bi bi-pencil-square"></i></a></td>
                                                <td><a href="vacc_availability_delete.php?id=<?php echo $rows ['id'] ?>" class="btn btn-danger">Delete <i class="bi bi-trash3-fill"></i></a></td>
                                            </tr>
                                               
                                            </tr>
                                            
                                                    
                                            <?php  } ?>
                                                                                           
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