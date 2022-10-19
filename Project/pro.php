<?php 
$host = "localhost";
$user = "root";
$password = "";
$db = "xenonstack";

$con = mysqli_connect($host, $user, $password);
mysqli_select_db($con, $db);

if(isset($_POST['fullname']))
{

  $yourName = $con->real_escape_string($_POST['fullname']);
  $yourEmail = $con->real_escape_string($_POST['email']);
  $yourPhone = $con->real_escape_string($_POST['phone']);
  $message = $con->real_escape_string($_POST['message']);
  $sql="INSERT INTO contact_form_info (Fullname, Emailaddress, Phonenumber, comment) VALUES ('".$yourName."','".$yourEmail."', '".$yourPhone."', '".$message."')";
  $success = mysqli_query($con, $sql);


  if (!$success) {
      die("Couldn't enter data: ".$mysqli->error);
  }
  
  
  echo "Thank You For Contacting Us ";
}
else{
    echo "Error Occured..";
}
?>