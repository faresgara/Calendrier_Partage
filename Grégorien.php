<?php
session_start();
include('inc/connections.php');
if(isset($_SESSION['id']) && isset($_SESSION['username']) )
{
  $id=$_SESSION['id'];
  $user=$_SESSION['username'];
}


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
      <a href="home.html"><img src="logo.png"></a>
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

  <div class="container">
    <div class="left">
      <!-- Calendar -->
      <div class="calendar">
        <div class="month">
          <i class="fas fa-angle-left prev"></i>
          <div class="date"></div>
          <i class="fas fa-angle-right next"></i>
        </div>
        <div class="weekdays">
          <div>Lun</div>
          <div>Mar</div>
          <div>Mer</div>
          <div>Jeu</div>
          <div>Ven</div>
          <div>Sam</div>
          <div>Dim</div>
        </div>
        <div class="days"></div>
        <div class="goto-today">
          <div class="goto">
            <input type="text" placeholder="mm/aaaa" class="date-input">
            <button class="goto-btn">Go</button>
          </div>
          <button class="today-btn">Aujourd'hui</button>
        </div>
      </div>
    </div>
    <div class="right">
      <div class="today-date">
        <div class="event-day"></div>
        <div class="event-date"></div>
        <br>
        <div class="event-date-hijri"></div>
      </div>
      <div class="events"></div>
      <div class="add-event-wrapper">
        <div class="add-event-header">
          <div class="title">Ajouter un événement</div>
          <i class="fas fa-times close"></i>
          </div>
          
          <form method="post" action="add_event.php" >

          <div class="add-event-body">
            <div class="add-event-input">
              <input type="text" placeholder="Nom de l'événement" class="event-name" name="n_event">
            </div>
            <div class="add-event-input">
              <input type="text" placeholder="Type de l'événement" class="event-type" name="t_event">
            </div>
            <div class="add-event-input">
              <input type="text" placeholder="Début" class="event-time-from" name="debut_event">
            </div>
            <div class="add-event-input">
              <input type="text" placeholder="Fin" class="event-time-to" name="fin_event">
            </div>
          </div>
          <div class="add-event-footer">
            <input type="submit" value="Ajouter" name="submit" class="add-event-btn">
          </div>
        </div>
      </div>
      </form>
      <button class="add-event">
        <i class="fas fa-plus"></i>
      </button>
    </div>
  
    <!-- JavaScript files -->

    <script src="script1.js"></script>
    
  </body>
  </html>