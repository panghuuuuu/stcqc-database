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
		<title> Home </title>
		<link rel="shortcut icon" type="image/x-icon" href="images/logoicon.ico">
		
		<!-- CSS link-->
		<link rel="stylesheet" type="text/css" href="css/home2.css">
		
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
    <!-- link to navbar without logo-->
    <?php include 'header_and_footer/header_noLogo.php'; ?>


    <div class="content">
      <section id="first">
        <br>
        <!-- heading-->
        <section id="stc">
          <img src="images/ilaw.png" width="250">
          <h1>
            <center><b>Integrated Library Automated Website</b></center>
          </h1>
          <div class="typewriter">
            <p>A collection of research papers published by Theresians</p>
          </div>
        </section>


        <!-- PHP CODE to connect to database !-->
        <?php
        include "include/databaseconnect.php";
        ?>

        <!-- searchbar-->
        <section id="search">
          <form class="example" action="search2.php" style="margin:auto;max-width:600px" onSubmit=“window.location.reload()”>
            <input type="text" name="Search" id="search" placeholder="Search...">
            <button type="submit" name="submit"><i class="fa fa-search"></i></button>
          </form>
        </section>

        <section id="subjects">

          <form action="searchsubject2.php">
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

        <section id="all">
          <center>
            <form action="search2.php">
              <button type="submit" id="btn2" name="Search" value="">SEE ALL</button>
            </form>
          </center>
        </section>

        <div class="mouse-icon">
          <div class="wheel"></div>
        </div>

        <hr style="border: 2px solid transparent;">
        <br>

      </section>

      <!--closing section id = "first"-->


      <section id="section">
        <h2>
          <center><i class="fa fa-book"></i> &nbsp Research Exhibit</center>
        </h2>

        <!--description for exhibit-->
        <p id="desc">
          <font size="5px"><b>Welcome to ILAW Database!</b></font> - Expand your knowledge and learn more about
          different STEM-related topics by browsing through this collection of studies established by grade twelve
          Theresians. Some of these
          researches explore the changes brought about by online learning to the STCQC community, investigate the
          effects of using online-friendly tools and methods to aid the community in adopting to these changes such as
          using digital note-taking and conducting music-integrated online lessons to improve students’ memory
          retention, using a novel home fitness program to improve physical fitness, and analyzing the STCQC community’s
          perception on the creation of a research database system. There are also a few researches that center around
          Biology and Chemistry in view of the advantage it could accord to the environment, namely the impact of
          duckweeds and hornworts in filtering the domestic wastewater, impact of vitamins B and E on the growth rate of
          the mung bean, benefits of urban gardening and soil composting in small homes, effects of gelatin in improving
          physical properties of milk-based bioplastic, and the use of paper and food wastes in producing biogas.
          Lastly, it also contains researches that delve into the study of Psychology such as the perception of students
          on pursuing medical professions, the effects of screen time on sleeping habits, and the effects of alternative
          online bonding activities on senior high school students.
        </p>

        <center>
          <br>
          <form action="searchsection2.php">
            <button type="submit" name="Section" id="btn3" value="12 STEM A"><i class="fas fa-capsules"></i>&nbsp 12
              STEM
              A
            </button>
            <button type="submit" name="Section" id="btn3" Value="12 STEM B"><i class="fas fa-hard-hat"></i>&nbsp
              12 STEM B
            </button>
          </form>
        </center>

        <div class="researches">
          <!--EDUCATION-->
          <div id="educ">
            <h3><i class="fas fa-chalkboard-teacher"></i>&nbsp Education</h3>
          </div>
          <?php
  
        $subject = "Quantitative Research";
        $subtopic = "Education";

        $sql = ("SELECT numberID, titleID, authorsID, yearID, subjectID, abstractID, keywordsID, sectionID, subtopicID
        FROM researchpapertable
        WHERE subjectID LIKE '%" . $subject . "%'
        AND subtopicID LIKE '%" . $subtopic . "%'

        ORDER BY yearID DESC
        ");

        $result = $mysqli->query($sql);

        if ($result-> num_rows>0) {
        while($row = mysqli_fetch_assoc($result)) {
        ?>

          <div id="box">
            <!-- TITLE -->
            <div id="boxtext">
              <h4 id="boxTitle"><a href="templateindiv2.php?titleID=<?php echo $row["titleID"]; ?>">
                  <?php echo $row["titleID"]; ?></a></h4>
              <!-- AUTHOR -->
              <h5 id="boxDetails"><?php echo $row["authorsID"]?></h5>
              <!-- SUBJECT -->
              <h5 id="boxDetails"><?php echo $row["subjectID"]?>, <?php echo $row["yearID"]?></h5>
              <!-- ABSTRACT -->
              <p id="boxAbstract"><?php echo substr($row['abstractID'], 0, 360);?> ...</p>
              <p></p>
            </div>
          </div>
          <?php
        }} else {?>
          <div id="error">
            <h1><i class="fa fa-exclamation-triangle"></i>&nbsp Not yet available.</h1>
          </div>
          <?php } ?>

          <!--ENVIRONMENT-->
          <div id="envi">
            <h3><i class="fa fa-tree"></i>&nbsp Environment</h3>
          </div>

          <?php
  
        $subject = "Quantitative Research";
        $subtopic = "Environment";

        $sql = ("SELECT numberID, titleID, authorsID, yearID, subjectID, abstractID, keywordsID, sectionID, subtopicID
        FROM researchpapertable
        WHERE subjectID LIKE '%" . $subject . "%'
        AND subtopicID LIKE '%" . $subtopic . "%'

        ORDER BY yearID DESC
        ");

        $result = $mysqli->query($sql);

        if ($result-> num_rows>0) {
        while($row = mysqli_fetch_assoc($result)) {
        ?>

          <div id="box">
            <!-- TITLE -->
            <h4 id="boxTitle"><a href="templateindiv2.php?titleID=<?php echo $row["titleID"]; ?>">
                <?php echo $row["titleID"]; ?></a></h4>
            <!-- AUTHOR -->
            <h5 id="boxDetails"><?php echo $row["authorsID"]?></h5>
            <!-- SUBJECT -->
            <h5 id="boxDetails"><?php echo $row["subjectID"]?>, <?php echo $row["yearID"]?></h5>
            <!-- ABSTRACT -->
            <p id="boxAbstract"><?php echo substr($row['abstractID'], 0, 360);?> ...</p>
            <p></p>
          </div>
          <?php
          }
        } else {?>
          <div id="error">
            <h1><i class="fa fa-exclamation-triangle"></i>&nbsp Not yet available.</h1>
          </div>
          <?php } ?>

          <!--PSYCHOLOGY-->
          <div id="psych">
            <h3><i class="fas fa-brain"></i>&nbsp Psychology</h3>
          </div>

          <?php
  
        $subject = "Quantitative Research";
        $subtopic = "Psychology";

        $sql = ("SELECT numberID, titleID, authorsID, yearID, subjectID, abstractID, keywordsID, sectionID, subtopicID
        FROM researchpapertable
        WHERE subjectID LIKE '%" . $subject . "%'
        AND subtopicID LIKE '%" . $subtopic . "%'

        ORDER BY yearID DESC
        ");

        $result = $mysqli->query($sql);

        if ($result-> num_rows>0) {
        while($row = mysqli_fetch_assoc($result)) {
        ?>

          <div id="box">
            <!-- TITLE -->
            <h4 id="boxTitle"><a href="templateindiv2.php?titleID=<?php echo $row["titleID"]; ?>">
                <?php echo $row["titleID"]; ?></a></h4>
            <!-- AUTHOR -->
            <h5 id="boxDetails"><?php echo $row["authorsID"]?></h5>
            <!-- SUBJECT -->
            <h5 id="boxDetails"><?php echo $row["subjectID"]?>, <?php echo $row["yearID"]?></h5>
            <!-- ABSTRACT -->
            <p id="boxAbstract"><?php echo substr($row['abstractID'], 0, 360);?> ...</p>
            <p></p>
          </div>
          <?php
        }} else {?>
          <div id="error">
            <h1><i class="fa fa-exclamation-triangle"></i>&nbsp Not yet available.</h1>
          </div>
          <?php } ?>
        </div> <!-- closing div class="researches"-->

      </section>

      <hr style="border: 2px solid transparent;">
      <hr style="border: 2px solid transparent;">

    </div>
    <!--closing div class="content"-->
  </div>
  <!--closing div class="container"-->

  <!-- link to footer-->
  <?php include 'header_and_footer/footer.php'; ?>
</body>

</html>