<?php
include('connect.php');
$id = $_GET['id'];
$deletequery = "DELETE FROM `bookdata` WHERE `id` = '$id'";
$query = mysqli_query($conn, $deletequery);
if($query) {
    echo "<script>
    alert('Record Deleted Successfully!');
    window.location.href='adminBookUpdate.php';
</script>";
}
else {
    echo "<script>
    alert('Problem Occured During The Operation!');
    window.location.href='adminBookUpdate.php';
</script>";
}
?>