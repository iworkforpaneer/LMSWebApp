<?php
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['password'])) {
$email = $_SESSION['email'];
require_once('connect.php');

//STORING SESSION VARIABLE VALUES INTO NEW VARIABLES
$studentname = $_SESSION['studentname'];
$studentenrollno = $_SESSION['studentenrollno'];
$bookid = $_SESSION['bookid'];
$booktitle = $_SESSION['booktitle']; 
$issuedate = $_SESSION['issuedate'];
$expirydate = $_SESSION['expirydate'];
$returneddate = $_SESSION['returneddate'];

// INSERTING VALUES NTO THE DATABASE
$SQL = "INSERT INTO `returnedbooks` (`rbtid`, `studentname`, `studentenrollno`, `email`, `bookid`, `booktitle`, `issuedate`, `expirydate`, `returneddate`, `time`) VALUES (NULL, '$studentname', '$studentenrollno', '$email', '$bookid', '$booktitle', '$issuedate', '$expirydate', '$returneddate', current_timestamp());";
$deletesql = "DELETE FROM `studentorders` WHERE `bookid` = '$bookid' AND `studentenrollno` = '$studentenrollno'";
$checkdelete = mysqli_query($conn, $deletesql);
if(mysqli_query($conn, $SQL)) {
        
}
if($checkdelete) {
    echo "<script>
    alert('Returned Book Successfully!');
    window.location.href='studentPlaceOrder.php';
</script>";
}
else {
    echo "<script>
    alert('Error Occured While Returning!');
    window.location.href='studentPlaceOrder.php';
</script>";
}
}
else {
    echo "<script>
    alert('Email & Password are not authenticated!');
    window.location.href='../../Login/studentLogin.php';
</script>";
}
?>