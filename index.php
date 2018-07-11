<?php
  $mysqli = new mysqli("localhost", "root", "", "quadb");
  $i=-1;

  $arr = array();
  $eventDate = 'eventDate';
  $eventTitle = 'eventName';
  $eventParagraph = 'eventParagraph';
  $eventImgLink = 'eventImgLink';

  if ($result = $mysqli->query("SELECT * FROM eventlist ORDER BY Id DESC limit 5")) {
    while($row = mysqli_fetch_array($result))
    {
        $i++;

        //$arr[$i]=array();
        $arr[$i][$eventDate]=$row[$eventDate];
        $arr[$i][$eventTitle]=$row[$eventTitle];
        $arr[$i][$eventParagraph]=$row[$eventParagraph];
        $arr[$i][$eventImgLink]=$row[$eventImgLink];
        //$SubjectCode[$i]['SubLongName']=$row['SubLongName'];
    }
    //printf("Select returned %d rows.\n", $result->num_rows);

    /* free result set */
    /* $result->close();*/
  }

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
      <div class="event-img-container" <?php echo 'style= "background-image: url(' . $arr[0][$eventImgLink] . ');"';?>>
        <div class="event-date-container"><p id="eventDate">
          <?php echo $arr[0][$eventDate];?>
        </p></div>
      </div>
      <div class="event-text-container">
        <h1 id="eventTitle1">
          <?php echo $arr[0][$eventTitle];?>
        </h1>
        <p id="eventParagraph">
          <?php echo $arr[0][$eventParagraph];?>
        </p>
      </div>
    </div>

    <div class="event">
      <div class="event-img-container" <?php echo 'style= "background-image: url(' . $arr[1][$eventImgLink] . ');"';?>>
        <div class="event-date-container"><p id="eventDate">
          <?php echo $arr[1][$eventDate];?>
        </p></div>
      </div>
      <div class="event-text-container">
        <h1 id="eventTitle1">
          <?php echo $arr[1][$eventTitle];?>
        </h1>
        <p id="eventParagraph">
          <?php echo $arr[1][$eventParagraph];?>
        </p>
      </div>
    </div>

    <div class="event">
      <div class="event-img-container" <?php echo 'style= "background-image: url(' . $arr[2][$eventImgLink] . ');"';?>>
        <div class="event-date-container"><p id="eventDate">
          <?php echo $arr[2][$eventDate];?>
        </p></div>
      </div>
      <div class="event-text-container">
        <h1 id="eventTitle1">
          <?php echo $arr[2][$eventTitle];?>
        </h1>
        <p id="eventParagraph">
          <?php echo $arr[2][$eventParagraph];?>
        </p>
      </div>
    </div>

    <div class="event">
      <div class="event-img-container" <?php echo 'style= "background-image: url(' . $arr[3][$eventImgLink] . ');"';?>>
        <div class="event-date-container"><p id="eventDate">
          <?php echo $arr[3][$eventDate];?>
        </p></div>
      </div>
      <div class="event-text-container">
        <h1 id="eventTitle1">
          <?php echo $arr[3][$eventTitle];?>
        </h1>
        <p id="eventParagraph">
          <?php echo $arr[3][$eventParagraph];?>
        </p>
      </div>
    </div>

    <div class="event">
      <div class="event-img-container" <?php echo 'style= "background-image: url(' . $arr[4][$eventImgLink] . ');"';?>>
        <div class="event-date-container"><p id="eventDate">
          <?php echo $arr[4][$eventDate];?>
        </p></div>
      </div>
      <div class="event-text-container">
        <h1 id="eventTitle1">
          <?php echo $arr[4][$eventTitle];?>
        </h1>
        <p id="eventParagraph">
          <?php echo $arr[4][$eventParagraph];?>
        </p>
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
