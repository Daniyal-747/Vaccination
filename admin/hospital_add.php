<?php

include("header.php");
include("connection.php");

$sql = "select * from users where ROLE_ID_FK = '3'";
$result = mysqli_query($conn,$sql);

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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
                            <h4 class="card-title">Add User Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" enctype="multipart/form-data">

                                        <div class="form-row">
                                        <div class="form-group col-md-12">
                                                <label>User Name</label>
                                                <select id="inputState" name="user_id" class="form-control">
                                                <?php

                                                while($rows = mysqli_fetch_assoc($result)){                                             

                                                ?>

                                                <option value="<?php echo $rows ['id']  ?>"><?php echo $rows ['Username'] ?></option>;
                                                <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Hospital Name</label>
                                                <input type="text" name="hospital_name" class="form-control" placeholder="Enter Hospital Name">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Location</label>
                                                <input type="text" name="location" class="form-control" placeholder="Enter Your Location">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Contact</label>
                                                <input type="text" name="contact" class="form-control" placeholder="Enter your Contact Number">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Image</label>
                                                <input type="file" name="hospital_image" class="form-control">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Details</label>
                                                <input type="text" name="details" class="form-control" placeholder="Enter Hospital Details">
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
    $user = $_POST['user_id'];
    $hospitalName = $_POST['hospital_name'];
    $location = $_POST['location'];
    $contact = $_POST['contact'];
    $hospitalImage = $_FILES['hospital_image']['name'];
    $details = $_POST['details'];

    $sql = "insert into hospital(USER_ID_FK, Hospital_Name, Location, Contact, Hospital_Image, Details) values('$user', '$hospitalName', '$location', '$contact', '$hospitalImage', '$details')";
    $result = mysqli_query($conn,$sql);

if(isset($_FILES)){
    $file_name = $_FILES['hospital_image']['name'];
    $file_size = $_FILES['hospital_image']['size'];
    $file_type = $_FILES['hospital_image']['type'];
    $file_tmp = $_FILES['hospital_image']['tmp_name'];

    move_uploaded_file($file_tmp, "images/hospital_details/" .$file_name);
}

echo "<script>
alert('User Details Has Been Added');
window.location.href = 'hospital_show.php'
</script>";

}


include("footer.php");

?>