<?php
session_start();
if(isset($_POST['submit_form']))
{

$con = mysqli_connect("localhost","root","","jugaad2022");
if ($con->connect_error){
    die("Connection failed: " . $con->connect_error);
}	 

$team_name=mysqli_real_escape_string($con, $_POST['team_name']);
$leader_name=mysqli_real_escape_string($con, $_POST['leader_name']);
$phone = mysqli_real_escape_string($con, $_POST['phone']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$size=mysqli_real_escape_string($con, $_POST['size']);
$mem1 = mysqli_real_escape_string($con, $_POST['mem1']);
$mem2 = mysqli_real_escape_string($con, $_POST['mem2']);
$mem3 = mysqli_real_escape_string($con, $_POST['mem3']);
$mem4 = mysqli_real_escape_string($con, $_POST['mem4']);

$_SESSION['name'] = $name;
$checkUser = "SELECT * FROM jugaad_data where email = '$email'";
$result = mysqli_query($con, $checkUser);
$count = mysqli_num_rows($result);
if($count>0){
    header('LOCATION:thanksmsg.php');   
}
else{
  $sql = "INSERT INTO jugaad_data (team_name, leader_name, phone, email, size, mem1, mem2, mem3, mem4) VALUES ('$team_name', '$leader_name', '$phone','$email','$size', '$mem1', '$mem2', '$mem3','$mem4')";
  if ($con->query($sql) === TRUE) {
   header('LOCATION:thanks.php');
 } else {
   echo "Error: " . $sql . "<br>" . $con->error;
 } 
}
}
?>
