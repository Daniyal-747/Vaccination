<?php

include("header.php");
include("connection.php");

$Id = $_GET['id'];
$sql = "delete from category where id = $Id";
$result = mysqli_query($conn,$sql);

echo "<script>
alert('Details Deleted Succesfully!');
window.location.href = 'category_show.php';
</script>"

?>


<?php

include("footer.php");

?>