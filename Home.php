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
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Stay organized with our user-friendly Calendar featuring events, reminders, and a customizable interface. Built with HTML, CSS, and JavaScript. Start scheduling today!">
    <meta name="keywords" content="calendar, events, reminders, javascript, html, css, open source coding">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="style2.css">
    <title>Calendrier Géorgien</title>
  </head>
  <body>

    <header id='home'>
      <div class="logo">
        <a href="home.html" ><img src="logo.png"></a>
      </div>
        <div class="navbar"> 
         <nav>
             <ul>
                <li><a href="home.php" >Home</a></li>
                <li><a href="events.php">Mes événements</a></li>
                <li><a href="Grégorien.php" >Grégorien</a></li>
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
              <input type="text" placeholder="mm/aaaa" class="date-input" />
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
          <div class="event-date-hijri"></div>
          <div class="tunis_events1">
            <h2>Les Fêtes et jours fériés 2023</h2>
            <ul>
              <li>Dimanche 1er janvier – Jour de l’an</li>
              <li>Lundi 20 mars – Fête de l’Indépendance</li>
              <li>Dimanche 9 avril – Journée des Martyrs</li>
              <li>Vendredi 21 avril et samedi 22 avril – Aïd el Fitr 2023 – fin du ramadan</li>
              <li>Lundi 1er mai – Fête du travail</li>
              <li>Mercredi 28 juin et jeudi 29 juin – Aïd el Kébir 2023</li>
              <li>Mercredi 19 juillet – Jour de l’an de Hijri</li>
              <li>Mardi 25 juillet – Fête de la République</li>
              <li>Dimanche 13 août – Fête de la Femme</li>
              <li>Mercredi 27 septembre – Mouled</li>
              <li>Dimanche 15 octobre – Fête de l’évacuation</li>
              <li>Dimanche 17 décembre – Fête de la Révolution</li>
            </ul>
          </div>
          
        </div>
        <div class="events"></div>
        
      </div>
      
    </div>

    <script src="script.js"></script>
  </body>
</html>