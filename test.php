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
    printf("Select returned %d rows.\n", $result->num_rows);

    /* free result set */
    /* $result->close();*/
  }

  $result->free();
  $mysqli->close();
?>
