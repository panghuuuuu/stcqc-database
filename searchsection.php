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
		<title> <?php 
          if(isset($_GET['Section'])){echo $_GET['Section'];}
          elseif(isset($_GET['submitsearch'])){echo $_GET['SectionSearch'];}?> 
       </title>
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
  <!-- link to navbar with logo and search-->
  <?php include 'header_and_footer/header_section2.php'; ?>

  <div class="container">
    <div class="content">

      <!-- ECHO SECTION-->
      <section id="subjectTitle">
        <br>
        <h1>Researches by <?php 
        //if they select a button("Section") in index.php, echo that "Section"
      if(isset($_GET['Section'])){echo $_GET['Section'];}
      //elseif they enter submit in the header search bar("submitsearch") in header_section.php, get the hidden input "SectionSearch"
      elseif(isset($_GET['submitsearch'])){echo $_GET['SectionSearch'];}?></h1>
        <br>
      </section>

      <section id="resultlist">
        <!-- PHP CODE FOR SHOWING RESULTS -->
        <?php
        include "include/databaseconnect.php";


        //if they select a button("Section") in index.php
        if(isset($_GET['Section'])){

        $section = $_GET['Section'];
        
        $sql = ("SELECT numberID, titleID, authorsID, yearID, subjectID, abstractID, keywordsID, sectionID  
        		FROM researchpapertable 
        		WHERE sectionID LIKE '%" . $section . "%'
        		
            ORDER BY yearID DESC
        		");
        
        $result = $mysqli->query($sql);

        if ($result-> num_rows>0) {
        while($row = mysqli_fetch_assoc($result)) {
        ?>

        <!-- DIVIDER -->
        <center>
          <hr style="border: 1px solid #C0C0C0;" id="divider">
        </center>

        <div id="result">
          <div id="textresult">
            <!-- TITLE -->
            <h1><a href="templateindiv.php?titleID=<?php echo $row["titleID"]; ?>">
                <?php echo $row["titleID"]; ?></a></h1>
            <!-- AUTHOR -->
            <h3><?php echo $row["authorsID"]?><h3>
                <!-- SUBJECT -->
                <h4> <?php echo $row["subjectID"]?>, <?php echo $row["yearID"]?></h4>
                <!-- ABSTRACT -->
                <p><?php echo substr($row['abstractID'], 0, 360);?> ...</p>
          </div>
        </div>

        <?php
          }
        } else {?>
        <div id="error">
          <h1><i class="fa fa-exclamation-triangle"></i>&nbsp Sorry, we couldn't find any results.</h1>
          <p>You may view other research papers by<br> going back to our <a
              href="home.php">
              <font color="#9b8334">Homepage</font>
            </a>.</p>
        </div>

        <?php
        //elseif they enter submit in the header search bar("submitsearch") in header_section.php
        }} elseif (isset($_GET['submitsearch'])){
      $search = $_GET['Search'];
      $sectionSearch = $_GET['SectionSearch'];;

        $sql = ("SELECT numberID, titleID, authorsID, yearID, subjectID, abstractID, keywordsID, sectionID  
            FROM researchpapertable 
            WHERE (titleID LIKE '%" . $search . "%' AND sectionID LIKE '%" . $sectionSearch . "%')
            OR (authorsID LIKE '%" . $search . "%' AND sectionID LIKE '%" . $sectionSearch . "%')
            OR (yearID LIKE '%" . $search . "%' AND sectionID LIKE '%" . $sectionSearch . "%')
            OR (subjectID LIKE '%" . $search . "%' AND sectionID LIKE '%" . $sectionSearch . "%')
            OR (abstractID LIKE '%" . $search . "%' AND sectionID LIKE '%" . $sectionSearch . "%')
            OR (keywordsID LIKE '%" . $search . "%' AND sectionID LIKE '%" . $sectionSearch . "%')

            ORDER BY yearID DESC
            ");

      $result=$mysqli->query($sql);

      if ($result-> num_rows>0) {
          // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
        ?>

        <!-- DIVIDER -->
        <center>
          <hr style="border: 1px solid #C0C0C0;" id="divider">
        </center>

        <div id="result">
          <div id="textresult">
            <!-- TITLE -->
            <h1><a href="templateindiv.php?titleID=<?php echo $row["titleID"]; ?>">
                <?php echo $row["titleID"]; ?></a></h1>
            <!-- AUTHOR -->
            <h3><?php echo $row["authorsID"]?><h3>
                <!-- SUBJECT -->
                <h4> <?php echo $row["subjectID"]?>, <?php echo $row["yearID"]?></h4>
                <!-- ABSTRACT -->
                <p><?php echo substr($row['abstractID'], 0, 360);?> ...</p>
          </div>
        </div>

        <?php
        //else their keyword is not found in the Section they selected
          }
        } else {?>
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
          <p>You may view other research papers by<br> going back to our <a
              href="home.php">
              <font color="#9b8334">Homepage</font>
            </a>.</p>
        </div>
        <?php
        }}
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