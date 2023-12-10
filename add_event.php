<?php

session_start();
include('inc/connections.php');
if(isset($_SESSION['id']) && isset($_SESSION['username']) )
{
  $id=$_SESSION['id'];
  $user=$_SESSION['username'];
}

if(isset($_POST['submit']))
{
$nom_event=$_POST['n_event'];
$type_event=$_POST['t_event'];
$debut_event=$_POST['debut_event'];
$fin_event=$_POST['fin_event'];

if ($nom_event=="" ||$type_event=="" ||$debut_event=="" ||$fin_event=="")
{
    include('Grégorien.php');

}else
{
    $sql="INSERT INTO `events` (`id`, `type`, `sujet`, `debut`, `fin`, `user_id`) VALUES (NULL, '$type_event', '$nom_event', '$debut_event', '$fin_event', '$id');";
    $result=mysqli_query($conn,$sql);
    include('Grégorien.php');
    exit();
}


}


?>