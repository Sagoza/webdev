<?php
  $mysqli = new mysqli("localhost", "root", "", "quadb");

  if ($result = $mysqli->query("SELECT * FROM eventlist")) {
    printf("Select returned %d rows.\n", $result->num_rows);

    /* free result set */
    /* $result->close();*/
  }

  $row = $result->fetch_array(MYSQLI_ASSOC);

  $eventDate = 'eventDate';
  $eventTitle = 'eventName';
  $eventParagraph = 'eventParagraph';
  $eventImgLink = 'eventImgLink';

  $result->free();
  $mysqli->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Main Page</title>
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="ss-one.css">
  <link rel="stylesheet" type="text/css" href="index.css">
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
  <script type="text/javascript" src="index.js"></script>
  <script type="text/javascript" src="index-jq.js"></script>
</head>
<!--

!-->

<header>
    <div class="tb">
      <a href=""><img src="http://icons.iconarchive.com/icons/graphicloads/100-flat/256/home-icon.png" alt="" class="sicon"></a>
      <ul>
        <li><a href="">Home</a></li>
        <li><a href="">News</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="">About</a></li>
      </ul>
    </div>
</header>

<body onload="OnLoad()">
  <div class="promoevent">
    <div class="promoSlides fade">
      <!-- <div class="numbertext">1 / 3</div> !-->
      <img src="http://www.portoalegre.travel/upload/b/0/3680_high-definition-wallpapers.jpg" style="width:100%">
      <div class="captionBox"><p class="captionText">Nova Banda</p></div>
    </div>

    <div class="promoSlides fade">
      <!-- <div class="numbertext">2 / 3</div> !-->
      <img src="http://www.portoalegre.travel/upload/b/0/3740_high-definition-wallpapers.jpg" style="width:100%">
      <div class="captionBox"><p class="captionText">Diogo Picarra dia 13 de Julho</p></div>
    </div>

    <a id="next" onclick="plusSlides(-1)">&#10095;</a>
    <a id="prev" onclick="plusSlides(1)">&#10094;</a>
  </div>

  <h1 class="sep">Eventos</h1>

  <div class="event-container">
    <div class="event">
      <div class="event-img-container" <?php echo 'style= "background-image: url(' . $row[$eventImgLink] . ');"';?>>
        <div class="event-date-container"><p id="eventDate">12, 13, 14 Julho de 2018</p></div>
      </div>
      <div class="event-text-container">
        <h1 id="eventTitle1">
          <?php echo $row[$eventTitle];?>
        </h1>
        <p id="eventParagraph">
          <?php echo $row[$eventParagraph];?>
        </p>
      </div>
    </div>

    <div class="event">
      <div class="event-img-container">
        <div class="event-date-container"><p id="eventDate">12, 13, 14 Julho de 2018</p></div>
      </div>
      <div class="event-text-container">
        <h1 id="eventTitle">NOS Alive</h1>
        <p id="eventParagraph">Venha ao Passeio Maritimo de Alges ver: Pearl Jam, The Gift, Churky e muito mais.</p>
      </div>
    </div>

    <div class="event">
      <div class="event-img-container">
        <div class="event-date-container"><p id="eventDate">12, 13, 14 Julho de 2018</p></div>
      </div>
      <div class="event-text-container">
        <h1 id="eventTitle">NOS Alive</h1>
        <p id="eventParagraph">Venha ao Passeio Maritimo de Alges ver: Pearl Jam, The Gift, Churky e muito mais.</p>
      </div>
    </div>

    <div class="event">
      <div class="event-img-container">
        <div class="event-date-container"><p id="eventDate">12, 13, 14 Julho de 2018</p></div>
      </div>
      <div class="event-text-container">
        <h1 id="eventTitle">NOS Alive</h1>
        <p id="eventParagraph">Venha ao Passeio Maritimo de Alges ver: Pearl Jam, The Gift, Churky e muito mais.</p>
      </div>
    </div>

    <div class="event">
      <div class="event-img-container">
        <div class="event-date-container"><p id="eventDate">12, 13, 14 Julho de 2018</p></div>
      </div>
      <div class="event-text-container">
        <h1 id="eventTitle">NOS Alive</h1>
        <p id="eventParagraph">Venha ao Passeio Maritimo de Alges ver: Pearl Jam, The Gift, Churky e muito mais.</p>
      </div>
    </div>
  </div>
</body>

<footer>
  <div class="footer-container">
    <div class="footer-column red">
      <h1>Quadricultura</h1>
      <p>Home</p>
      <p>News</p>
      <p>Contacts</p>
      <p>About</p>
    </div>
    <div class="footer-column black">
      <h1>Quadricultura</h1>
      <p>TestParagrah</p>
    </div>
    <div class="footer-column red">
      <h1>Quadricultura</h1>
      <p>TestParagrah</p>
    </div>
    <div class="footer-column black">
      <h1 class="no-margin">Social</h1>
      <p>Facebook</p>
      <p>Instagram</p>
      <p>Tubmlr</p>
    </div>
  </div>
  <div>
    <p class="footer-p">Quadricultura 2018 ©</p>
  </div>
</footer>
</html>
