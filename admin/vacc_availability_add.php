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
                                <h4 class="card-title">Add Vaccine</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" enctype="multipart/form-data">

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>User</label>
                                                <select id="inputState" name="user_id" class="form-control">
                                                <?php
                                                
                                                $sql = "select * from users where ROLE_ID_FK = '3'";
                                                $result = mysqli_query($conn,$sql);
                                                while($rows = mysqli_fetch_assoc($result)){

                                                ?>

                                                <option value="<?php echo $rows ['id'] ?>"><?php echo $rows ['Username'] ?></option>;

                                                <?php } ?>

                                                </select>

                                            </div>

                                            <div class="form-group col-md-12">
                                                <label>Vaccine</label>
                                                <select id="inputState" name="vaccine_id" class="form-control">
                                                <?php
                                                $sql = "select * from vaccine_detail";
                                                $result = mysqli_query($conn,$sql);

                                                while($rows = mysqli_fetch_assoc($result)){

                                                ?>

                                                <option value="<?php echo $rows ['id'] ?>"><?php echo $rows ['Vaccine_Name'] ?></option>;

                                                <?php } ?>

                                                </select>

                                            </div>

                                            <div class="form-group col-md-12">
                                                <label>Status</label>
                                                <input type="text" name="status" class="form-control" placeholder="Enter Status">
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label>Hospital</label>
                                                <input type="text" name="hospital" class="form-control" placeholder="Enter Hospital Name">
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
    $user = $_POST ['user_id'];
    $vaccine = $_POST ['vaccine_id'];
    $status = $_POST['status'];
    $hospital = $_POST ['hospital'];
    

    $sql = "insert into vaccine_availability (USER_ID_FK,VACCINE_ID_FK, Status, Hospital) values ('$user', '$vaccine', '$status', '$hospital')";
    $result = mysqli_query($conn,$sql);

    echo "<script>
    alert('Details Added Successfully');
    window.location.href = 'vacc_availability_show.php'
    </script>";
}

include("footer.php");

?>