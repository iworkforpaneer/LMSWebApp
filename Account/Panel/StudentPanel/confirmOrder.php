<?php
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['password'])) {
require_once('connect.php');

//STORING SESSION VARIABLE VALUES INTO NEW VARIABLES
$bookid = $_SESSION['bookid'];
$booktitle = $_SESSION['booktitle'];    
$bookauthname = $_SESSION['bookauthname']; 
$studentname = $_SESSION['studentname']; 
$studentenrollno = $_SESSION['studentenrollno'];
$email = $_SESSION['email'];          
$issuedate = $_SESSION['issuedate'];    
$expirydate = $_SESSION['expirydate'];   

// INSERTING VALUES NTO THE DATABASE
$sql = "INSERT INTO `studentorders` (`tid`, `bookid`, `booktitle`, `bookauthname`, `studentname`, `studentenrollno`, `email`, `issuedate`, `expirydate`, `time`) VALUES (NULL, '$bookid', '$booktitle', '$bookauthname', '$studentname', '$studentenrollno', '$email', '$issuedate', '$expirydate', current_timestamp());";

if(mysqli_query($conn, $sql)) {
    echo "<script>
        alert('Placed Order Successfully!');
        window.location.href='studentPlaceOrder.php';
    </script>";
}
else {
    echo "<script>alert('Error Occured During Placing Order!')</script>";
}
}
else {
    echo "<script>
    alert('Email & Password are not authenticated!');
    window.location.href='../../Login/studentLogin.php';
</script>";
}
?>