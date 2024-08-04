<?php

include("header.php");
include("connection.php");

$sql = "select * from role";
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
                            <h4 class="card-title">Add Your Users</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" enctype="multipart/form-data">

                                        <div class="form-row">
                                        <div class="form-group col-md-12">
                                                <label>Role Name</label>
                                                <select id="inputState" name="role_id" class="form-control">
                                               
                                                <?php

                                                while($rows = mysqli_fetch_assoc($result)){                                             

                                                ?>

                                                <option value="<?php echo $rows ['id']  ?>"><?php echo $rows ['Role_Name'] ?></option>;
                                                <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Username</label>
                                                <?php

                                                $Id= $_GET['id'];
                                                $sql = "select * from users where id = $Id";
                                                $result = mysqli_query($conn,$sql);
                                                $rows = mysqli_fetch_assoc($result);

                                                ?>
                                                <input type="text" name="username" value="<?php echo $rows['Username'] ?>" class="form-control" placeholder="Enter Your Username">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Password</label>
                                                <input type="text" name="password" value="<?php echo $rows['Password'] ?>" class="form-control" placeholder="Enter Your Password">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Contact</label>
                                                <input type="text" name="contact" value="<?php echo $rows['Contact'] ?>" class="form-control" placeholder="Enter your Contact Number">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>User Image</label>
                                                <input type="file" name="user_image" value="<?php echo $rows['User_Image']?>" class="form-control">
                                            </div>
                                           
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


<?php

if(isset($_POST['submit'])){
    $role = $_POST['role_id'];
    $userName = $_POST['username'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];
    $userImage = $_FILES['user_image']['name'];

    $sql = "update users set ROLE_ID_FK = '$role', Username = '$userName', Password = '$password', Contact = '$contact', User_Image = '$userImage' where id = $Id";
    $result = mysqli_query($conn,$sql);

if(isset($_FILES)){
    $file_name = $_FILES['user_image']['name'];
    $file_size = $_FILES['user_image']['size'];
    $file_type = $_FILES['user_image']['type'];
    $file_tmp = $_FILES['user_image']['tmp_name'];

    move_uploaded_file($file_tmp, "images/user_details/" .$file_name);
}

echo "<script>
alert('User Details Has Been Updated');
window.location.href = 'user_show.php'
</script>";

}


include("footer.php");

?>