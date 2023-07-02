<!DOCTYPE html>
<html>
	<head>
		<!-- general information-->
		<meta charset="utf-8">
		<meta name = "viewport" content="width=device-width, initial-scale=1.0">
		<meta name = "description" content="A collection of research papers published by Theresians. The goal of this database is to design an accessible and well-designed website that Theresians can use for research purposes.">
		<meta name = "keywords" content="database,stcqc,research">
		<meta name = "author" content="Alfonso,Dacayan,Dayo,Guillermo,Molina,Panghulan">
		<meta property="og:image" content="images/thumbnail.png">
		
		<!-- title and icon link-->
		<title> Search Results </title>
		<link rel="shortcut icon" type="image/x-icon" href="images/logoicon.ico">
		
		<!-- CSS link-->
		<link rel="stylesheet" type="text/css" href="css/search2.css">
		
		<!-- link to google fonts-->
	    <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
		
		<!-- link to navbar icons-->
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        
        <style>
            img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
            display: none;
            }
        </style>
	</head>

<body>
  <div class="container">
    <!-- link to navbar with logo and search-->
    <?php include 'header_and_footer/header_search2.php'; ?>

    <div class="content">

      <!-- RESULTS -->
      <section id="resultlist">
        <!-- PHP CODE FOR SHOWING RESULTS -->
        <?php
        include "include/databaseconnect.php";
        
        $keywordfromform = $_GET["Search"];
        
        $sql = ("SELECT numberID, titleID, authorsID, yearID, subjectID, abstractID, keywordsID  
        		FROM researchpapertable 
        		WHERE titleID LIKE '%" . $keywordfromform . "%'
        		OR authorsID LIKE '%" . $keywordfromform . "%'
        		OR yearID LIKE '%" . $keywordfromform . "%'
        		OR subjectID LIKE '%" . $keywordfromform . "%'
        		OR abstractID LIKE '%" . $keywordfromform . "%'
        		OR keywordsID LIKE '%" . $keywordfromform . "%'
        		
            ORDER BY yearID DESC
        		");
        $result = $mysqli->query($sql);
        
        if ($result-> num_rows>0) {
          // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
        ?>

        <center>
          <hr style="border: 1px solid #C0C0C0;" id="divider">
        </center>
        <div id="result">
          <div id="textresult">
            <h1 class="title"><a href="templateindiv.php?titleID=<?php echo $row["titleID"]; ?>">
                <?php echo $row["titleID"]; ?></a></h1>
            <h3 class="author"><?php echo $row["authorsID"]?><h3>
                <h4> <?php echo $row["subjectID"]?>, <?php echo $row["yearID"]?></h4>
                <p><?php echo substr($row['abstractID'], 0, 360);?> ...</p>
          </div>
        </div>
        <?php
          }
        } else {
        ?>

        <!-- search subject -->
        <section id="subjects">
          <form action="searchsubject.php">
            <label> Subjects: </label>
            <button type="submit" name="Subject" id="btn" value="Science"><i class="fas fa-atom"></i>&nbsp Science
            </button>
            <button type="submit" name="Subject" id="btn" Value="Statistics"><i class="fas fa-chart-line"></i>&nbsp
              Statistics
            </button>
            <button type="submit" name="Subject" id="btn" Value="Qualitative Research"><i
                class="fas fa-book-open"></i>&nbsp
              Qualitative Research
            </button>
            <button type="submit" name="Subject" id="btn" Value="Theology"><i class="fas fa-church"></i>&nbsp Theology
            </button>
            <button type="submit" name="Subject" id="btn" Value="TLE"><i class="fas fa-utensils"></i>&nbsp TLE
            </button>
            <button type="submit" name="Subject" id="btn" Value="English"><i class="fas fa-pen-alt"></i>&nbsp English
            </button>
            <button type="submit" name="Subject" id="btn" Value="Quantitative Research"><i
                class="fas fa-search"></i>&nbsp
              Quantitative Research
            </button>
          </form>
        </section>

        <div id="error">
          <h1><i class="fa fa-exclamation-triangle"></i>&nbsp Sorry, we couldn't find any results.</h1>
          <p>You may view other research papers by selecting a subject above <br>or going back to our <a
              href="index.php">
              <font color="#9b8334">Homepage</font>
            </a>.</p>
        </div>
        <?php  
        }
        $mysqli->close();
        ?>
      </section> <!-- closing section id="resultlist" -->

    </div>
    <!-- closing div class="content" -->
  </div> <!-- closing div class="container"-->

  <!-- BACK TO TOP BUTTON -->
  <button onclick="topFunction()" id="back" title="Back to Top"> <img src="images/up.png"> </button>

  <!-- link to footer-->
  <?php include 'header_and_footer/footer2.php'; ?>
</body>

</html>

<!-- JS CODE FOR SORTING -->

<!-- JS CODE FOR BACK TO TOP BUTTON -->
<script type="text/javascript">
backtotop = document.getElementById("back");

window.onscroll = function() {
  scrollFunction()
};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 20) {
    backtotop.style.display = "block";
  } else {
    backtotop.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>