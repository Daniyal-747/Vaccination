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
                                                <input type="text" name="parent" class="form-control" placeholder="Enter Parent Name">
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label>Child Name</label>
                                                <input type="text" name="child" class="form-control" placeholder="Enter Child Name">
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
                                                <input type="date" name="date" class="form-control" placeholder="Enter Date of Vaccination">
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label>Time</label>
                                                <input type="time" name="time" class="form-control" placeholder="Enter Time of Vaccination">
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
    $parentName = $_POST ['parent'];
    $childName = $_POST ['child'];
    $hospital = $_POST ['hospital_id'];
    $vaccine = $_POST ['vaccine_id'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    

    $sql = "insert into appointment (Parent_Name, Child_Name, HOSPITAL_ID_FK , VACCINE_ID_FK, Date, Time) values ('$parentName', '$childName', '$hospital', '$vaccine', '$date', '$time')";
    $result = mysqli_query($conn,$sql);

    echo "<script>
    alert('Details Added Successfully');
    window.location.href = 'appointment_show.php'
    </script>";
}

include("footer.php");

?>