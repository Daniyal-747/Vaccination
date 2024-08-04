<?php

include("header.php");
include("connection.php");

$Id = $_GET['id'];
$sql = "delete from role where id = $Id";
$result = mysqli_query($conn,$sql);

echo "<script>
alert('Details Deleted Succesfully!');
window.location.href = 'role_show.php';
</script>"

?>


<?php

include("footer.php");

?>