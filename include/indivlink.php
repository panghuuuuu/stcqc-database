<?php
    include "databaseconnect.php";

    $titleID = $_GET["titleID"];

    $sql = ("SELECT numberID, titleID, authorsID, yearID, subjectID, abstractID, linksID 
    FROM researchpapertable 
    WHERE titleID = '$titleID'");
    $result = $mysqli->query($sql);

    $row = mysqli_fetch_assoc($result);
    
    $mysqli->close();
?>