<?php

include("header.php");
include("connection.php");

$sql = "select * from category";
$result = mysqli_query($conn,$sql);

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
                                <h4 class="card-title">Vaccine Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" enctype="multipart/form-data">

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Category</label>
                                                <select id="inputState" name="cat_id" class="form-control">
                                                <?php

                                                while($rows = mysqli_fetch_assoc($result)){

                                                ?>

                                                <option value="<?php echo $rows ['id'] ?>"><?php echo $rows ['CAT_Name'] ?></option>;

                                                <?php } ?>

                                                </select>

                                            </div>

                                            <div class="form-group col-md-12">
                                                <label>Vaccine Name
                                                    
                                                </label>
                                                <input type="text" name="vaccinename" class="form-control" placeholder="Name of Vaccination">
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label>Vaccine Dose</label>
                                                <input type="text" name="vaccinedose" class="form-control" placeholder="Enter Vaccine Dosage">
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
    $vaccineName = $_POST['vaccinename'];
    $vaccineDose = $_POST ['vaccinedose'];
    $category = $_POST ['cat_id'];

    $sql = "insert into vaccine_detail (Vaccine_Name, Dose, CAT_ID_FK) values ('$vaccineName', '$vaccineDose', '$category')";
    $result = mysqli_query($conn,$sql);

    echo "<script>
    alert('Details Added Successfully');
    window.location.href = 'vaccine_show.php'
    </script>";
}

include("footer.php");

?>