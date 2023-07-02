<?php
      require 'indivlink.php';
      require 'databaseconnect.php';
      
      $numberID = $row['numberID'];
        
      $sql = ("SELECT commentNUM, nameID, sectionID, researchID, commentID, ratingID, timestampID
            FROM commentsection WHERE researchID LIKE $numberID ORDER BY timestampID DESC
            ");

      $result=$mysqli->query($sql);
?>