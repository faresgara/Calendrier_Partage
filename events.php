<?php
session_start();
include('inc/connections.php');
if(isset($_SESSION['id']) && isset($_SESSION['username']) )
{
  $id=$_SESSION['id'];
  $user=$_SESSION['username'];
  
}
$type="rendez-vous";
$type2="Dépence";
$type3="Recette";
$sql="SELECT * FROM `events` WHERE user_id='$id' AND type='$type'";
$sql2="SELECT * FROM `events` WHERE user_id='$id' AND type='$type2'";
$sql3="SELECT * FROM `events` WHERE user_id='$id' AND type='$type3'";
$result=mysqli_query($conn,$sql);
$result2=mysqli_query($conn,$sql2);
$result3=mysqli_query($conn,$sql3);
?>








<!DOCTYPE html>
<html>
<head>
  <!-- Meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Stay organized with our user-friendly Calendar featuring events, reminders, and a customizable interface. Built with HTML, CSS, and JavaScript. Start scheduling today!">
  <meta name="keywords" content="calendar, events, reminders, javascript, html, css, open source coding">

  <!-- External stylesheets -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <link rel="stylesheet" href="style.css">

  <!-- Page title -->
  <title>Calendrier Géorgien</title>
</head>

<body>
  <!-- Header -->
  <header id="home">
    <div class="logo">
      <a href="Home.php"><img src="logo.png"></a>
    </div>
    <div class="navbar">
      <nav>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="events.php">Mes événements</a></li>
          <li><a href="Grégorien.php">Grégorien</a></li>
          <li><?php     
          echo "<span style='color:white;font-family:Poppins;margin-left:50px;'>Hey,</span><span style='color:grey;font-family:Poppins;color:#b38add;'> ".$user."</span>";
          ?></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="evemt">
    <div class="type_evemt">
        <h2>Vos Rendez-vous :</h2>
        <?php
        
         while($row=mysqli_fetch_assoc($result))
         {
           echo "&nbsp;<ul style=' color: white;font-family:Poppins;margin-left: 40px;'><li><span style='color:white;''>".$row['sujet']."</span> : starts at :".$row['debut']." /ends at:".$row['fin']."</li></ul><br>";//<span style="color:green;" > Please verify your password !! </span>
                
                 };
 
        ?>
        <div class="rdv">
            <!-- <p class="para">aa</p>
            <p class="para">bb</p> -->
        </div>
        <h2>Vos échéances financières :</h2>
            <h3>Dépences :</h3>
            <div class="depence">
            </div>
            <?php
        
         while($row1=mysqli_fetch_assoc($result2))
         {
           echo "&nbsp;&nbsp;<ul style=' color: white;font-family:Poppins;margin-left: 40px;'><li><span style='color:white;''>".$row1['sujet']."</span> : before the :".$row1['debut']."</li></ul><br>";//<span style="color:green;" > Please verify your password !! </span>
                
                 };
 
        ?>
            <h3>Recettes :</h3>
            <div class="recette">

            <?php
        
        while($row2=mysqli_fetch_assoc($result3))
        {
          echo "&nbsp;&nbsp;<ul style=' color: white;font-family:Poppins;margin-left: 40px;'><li><span style='color:white;''>".$row2['sujet']."</span> : before the :".$row2['debut']."</li></ul><br>";//<span style="color:green;" > Please verify your password !! </span>
               
                };

       ?>
                
            </div>
    </div>
  </div>
  
    <!-- JavaScript files -->

    <script src="script1.js"></script>
    
  </body>
  </html>