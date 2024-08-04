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
                                                <label>Parent Name</label>
                                                <select id="inputState" name="parent_id" class="form-control">
                                                <?php
                                                
                                                $sql = "select * from users where ROLE_ID_FK = '2'";
                                                $result = mysqli_query($conn,$sql);
                                                while($rows = mysqli_fetch_assoc($result)){

                                                ?>

                                                <option value="<?php echo $rows ['id'] ?>"><?php echo $rows ['Username'] ?></option>;

                                                <?php } ?>

                                                </select>

                                            </div>

                                            <div class="form-group col-md-12">
                                                <label>Child Name</label>
                                                <select id="inputState" name="child_id" class="form-control">
                                                <?php
                                                $sql = "select * from child_details";
                                                $result = mysqli_query($conn,$sql);

                                                while($rows = mysqli_fetch_assoc($result)){

                                                ?>

                                                <option value="<?php echo $rows ['id'] ?>"><?php echo $rows ['Child_Name'] ?></option>;

                                                <?php } ?>

                                                </select>

                                            </div>

                                            <div class="form-group col-md-12">
                                                <label>Hospital</label>
                                                <select id="inputState" name="hospital_id" class="form-control">
                                                <?php
                                                $sql = "select * from hospital";
                                                $result = mysqli_query($conn,$sql);

                                                while($rows = mysqli_fetch_assoc($result)){

                                                ?>

                                                <option value="<?php echo $rows ['id'] ?>"><?php echo $rows ['Hospital_Name'] ?></option>;

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
                                                <label>Date</label>
                                                <?php

                                                $Id= $_GET['id'];
                                                $sql = "select * from appointment where id = $Id";
                                                $result = mysqli_query($conn,$sql);
                                                $rows = mysqli_fetch_assoc($result);

                                                ?>
                                                <input type="date" name="date" value="<?php echo $rows['Date'] ?>" class="form-control" placeholder="Enter Date of Vaccination">
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label>Status</label>
                                                <input type="text" name="status" value="<?php echo $rows['Status'] ?>" class="form-control" placeholder="Enter Vaccine Status">
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label>Time</label>
                                                <input type="text" name="time" value="<?php echo $rows['Time'] ?>" class="form-control" placeholder="Enter Time of Vaccination">
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label>Remarks</label>
                                                <input type="text" name="remarks" value="<?php echo $rows['Remarks'] ?>" class="form-control" placeholder="Enter Remarks">
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
    $parentName = $_POST ['parent_id'];
    $childName = $_POST ['child_id'];
    $hospital = $_POST ['hospital_id'];
    $vaccine = $_POST ['vaccine_id'];
    $date = $_POST['date'];
    $status = $_POST['status'];
    $time = $_POST['time'];
    $remarks = $_POST['remarks'];
    

    $sql = "update appointment set USER_ID_FK = '$parentName', CHILD_ID_FK = '$childName', HOSPITAL_ID_FK = '$hospital', VACCINE_ID_FK = '$vaccine', Date = '$date', Status = '$status', Time = '$time', Remarks = '$remarks' where id = $Id";
    $result = mysqli_query($conn,$sql);

    echo "<script>
    alert('Details Updated Successfully');
    window.location.href = 'appointment_show.php'
    </script>";
}

include("footer.php");

?>