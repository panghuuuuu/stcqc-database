<?php
        include "databaseconnect.php";
        
        $keywordfromform = $_GET["Subject"];
        
        $sql = ("SELECT numberID, titleID, authorsID, yearID, subjectID, abstractID, keywordsID  
        		FROM researchpapertable 
        		WHERE subjectID LIKE '%" . $keywordfromform . "%'
        		
        		ORDER BY yearID DESC
        		");
        $result = $mysqli->query($sql);
        
        if ($result-> num_rows>0) {
          // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
        ?>