<?php

include("header.php");
include("connection.php");

$Id = $_GET['id'];
$sql = "select * from child_details where id = $Id";
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
                                                <label>Child Name</label>
                                                <input type="text" name="childname" value="<?php echo $rows ['Child_Name'] ?>" class="form-control" placeholder="Enter Your Name">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Gender</label>
                                                <input type="text" name="gender" value="<?php echo $rows ['Gender'] ?>" class="form-control" placeholder="Male/Female">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Blood Group</label>
                                                <input type="text" name="bloodgroup" value="<?php echo $rows ['Blood_Group'] ?>" class="form-control" placeholder="Enter your Password">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Date of Birth</label>
                                                <input type="date" name="dob" value="<?php echo $rows ['DOB'] ?>" class="form-control" placeholder="Rnter your Password">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Birth Certificate</label>
                                                <input type="file" name="birthcertificate" value="<?php echo $rows ['B_Certificate'] ?>" class="form-control" placeholder="Rnter your Password">
                                            </div>
                                           
                                        </div>
                                        <button type="submit" name="update" class="btn btn-primary">Update Details</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


<?php

if(isset($_POST['update'])){
    $childName = $_POST['childname'];
    $gender = $_POST['gender'];
    $bloodGroup = $_POST['bloodgroup'];
    $dob = $_POST['dob'];
    $birthCertificate = $_FILES['birthcertificate']['name'];

    $sql = "update child_details set Child_Name = '$childName', Gender = '$gender', Blood_Group = '$bloodGroup', DOB = '$dob', B_Certificate = '$birthCertificate' where id = $Id";
    $result = mysqli_query($conn,$sql);
    
    if (isset($_FILES)) {
        $file_name = $_FILES['birthcertificate']['name'];
        $file_size = $_FILES['birthcertificate']['size'];
        $file_type = $_FILES['birthcertificate']['type'];
        $file_tmp = $_FILES['birthcertificate']['tmp_name'];

        move_uploaded_file($file_tmp, "images/child_details/" .$file_name);
    }

    echo "<script>
        alert('Child Details Has Been Added');
        window.location.href = 'child_show.php'
        </script>";
}

include("footer.php");

?>