<?php

include("header.php");
include("connection.php");

$Id = $_GET['id'];
$sql= "delete from vaccine_availability where id = $Id";
$result = mysqli_query($conn,$sql);

echo "<script>
alert('Details Deleted Successfully!');
window.location.href = 'vacc_availability_show.php';
</script>"

?>




<?php

include("fooer.php");

?>