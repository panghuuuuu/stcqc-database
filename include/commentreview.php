<?php 
    require 'include/databaseconnect.php';

    date_default_timezone_set('Asia/Manila');

    $msg="";

    if(isset($_GET['submit'])){
        $name=$_GET['nameID'];
        $section=$_GET['sectionID'];
        $comment=$_GET['commentID'];
        $rating=$_GET['rate'];
        $research=$_GET['researchID'];
        $date=date("Y-m-d H:i:s");

        $name= addslashes($name);
        $section= addslashes($section);
        $comment= addslashes($comment);
        $rating= addslashes($rating);
        $research= addslashes($research);

        $sql="INSERT INTO commentsection (nameID,sectionID,commentID,researchID,ratingID,timestampID) VALUES('$name','$section','$comment', '$research', '$rating','$date')";

        if($mysqli->query($sql)){
            $msg = "<font color=#62cc62;>Posted Successfully!</font>";
        }
        else{
            $msg = "<font color=#ed4337;>Failed to post comment!</font>";
        }
    }
 ?>