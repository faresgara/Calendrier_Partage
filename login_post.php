<?php 
session_start();
include('inc/connections.php');


if(isset($_POST['submit']))
{
    $email=stripcslashes($_POST['email']);
$password=stripcslashes($_POST['password']); 


$check_user="SELECT id,email FROM `users` WHERE email='$email' ";
$check_result=mysqli_query($conn,$check_user);
$num_rows=mysqli_num_rows($check_result);
if($num_rows == 0)
{
    $message_error='<span style="color:green;"> Sorry, this account does not exist !! </span>';
    include('login.php');
}else
{

$check_pass="SELECT password FROM `users` WHERE email='$email' AND password='$password' ";
$check_result2=mysqli_query($conn,$check_pass);
$num_rows2=mysqli_num_rows($check_result2);
if($num_rows2 == 0)
{
    $message_error='<span style="color:green;" > Please verify your password !! </span>';
    include('login.php');
}else {
    //$sqlnom="SELECT username FROM `users` WHERE email='$email' AND password='$password' ";
    //$resultat_nom=mysqli_query($conn,$sqlnom);


    $sql_session="SELECT id,username FROM `users` WHERE email='$email' ";
    $result_session=mysqli_query($conn,$sql_session);
    $row_session=mysqli_fetch_assoc($result_session);
    $_SESSION['username']=$row_session['username'];
    $_SESSION['id']=$row_session['id'];

    
    header('location:Home.php');
    exit();
}


}

}






?>