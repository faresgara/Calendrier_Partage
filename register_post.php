<?php
include('inc/connections.php'); //hethi maaneha bch testad3i file 
if(isset($_POST['submit']))//maaneha houni idha el aabed aamal post (maaneha nzel aal button submit)
{
$username=stripcslashes($_POST['username']);
$password=stripcslashes($_POST['password']);
$password1=stripcslashes($_POST['password1']);
$email=stripcslashes($_POST['email']);
//$sql="INSERT INTO `users` (`id`, `username`, `password`) VALUES (NULL, '$username', '$password');";
//$result=mysqli_query($conn,$sql);

$check_user="SELECT * FROM `users` WHERE email='$email'";
$check_result=mysqli_query($conn,$check_user);
$num_rows=mysqli_num_rows($check_result);


if($num_rows == 0 && $password==$password1)
{
    $sql="INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES (NULL, '$username', '$email', '$password');";
    $result=mysqli_query($conn,$sql);
    header('location:login.php');//hethi maaneha thezek lel login

}else {
    $user_error='<span style="color:green;"> Sorry email already exist !! </span>';
    include('signup.php');
}





}


?>