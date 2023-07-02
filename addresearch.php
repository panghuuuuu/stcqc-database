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
		<title> Upload Review </title>
		<link rel="shortcut icon" type="image/x-icon" href="images/logoicon.ico">
		
		<!-- CSS link-->
		<link rel="stylesheet" type="text/css" href="css/templateindiv3.css">
		
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
  <!-- link to navbar with logo-->
  <?php include 'header_and_footer/header2.php'; ?>

  <div class="container">

    <div class="content">
      <section id="h1title">
        <br>
        <h1>Upload Review</h1>
        <br>
      </section>

      <div id="check">
        <h1><i class="fas fa-check-circle"></i>&nbsp Your paper has been uploaded.</h1>
        <p>Please wait for an email regarding your uploaded details.<br>You may now check the <a href="pending.php"
            style="color: #9b8334;">Pending Researches</a> and wait for <br>another email once your paper is ready for
          viewing
          <span style="color: #858585; font-style: italic;">(1-3 days)</span>.
        </p>
      </div>
      <br>

      <div class="background">
        <br>
        <!--PHP CODE TO UPLOAD PAPER DETAILS-->
        <?php
            include "include/databaseconnect.php";

          date_default_timezone_set('Asia/Manila');

            $researchtitle = $_POST["newtitle"];
            $researchauthors = $_POST["newauthors"];
            $researchyear = $_POST["newyear"];
            $researchsubject = $_POST["newsubject"];
            $researchabstract = $_POST["newabstract"];
            $researchkeywords = $_POST["newkeywords"];
            $researchpaper = $_POST["newpaper"];
            $researchstatus = $_POST["newstatus"];
            $researchdate = date("Y-m-d H:i:s");
        
        	include "include/symbolsUpload.php";
        	
           $sql = "INSERT INTO uploadresearchpapertable (uploadtitleID, uploadauthorsID, uploadyearID, uploadsubjectID, uploadabstractID, uploadkeywordsID, uploadlinksID, uploadtimeID, uploadstatusID) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
           $result = $mysqli->query($sql);
        
        	if ($result) {
        	    echo "<script type='text/javascript'>alert('Your submission failed. Please try again.')</script>";
        	} else {
        	    echo "<script type='text/javascript'>alert('Submitted Successfully! Your research will be approved by the admin.')</script>";
        	}
        
        	$stmt = mysqli_stmt_init($mysqli);
        	if (!mysqli_stmt_prepare($stmt, $sql)) {
        		echo "SQL error";
        	} else {
        		mysqli_stmt_bind_param($stmt, "ssissssss", $researchtitle, $researchauthors, $researchyear, $researchsubject, $researchabstract, $researchkeywords, $researchpaper, $researchdate, $researchstatus);
        		mysqli_stmt_execute($stmt);
        	}
        
        $mysqli->close();
        ?>

        <!--TITLE ID-->
        <h1 class="title"><?php echo $researchtitle ?></h1>

        <!--AUTHORS ID-->
        <h4 class="subheading"><?php echo $researchauthors; ?></h4>

        <!-- SUBJECT ID, YEAR ID-->
        <h4 class="subheading"><?php echo $researchsubject;?>,
          <?php echo $researchyear; ?></h4>

        <!--LINKS ID -->
        <a href="<?php echo $researchpaper ;?>" class="open" target="_blank">
          <button type="button" id="access"> Access FULL Research Paper </button>
        </a>
        <br><br>
        <hr>
      </div>
      <!--closing div class="background"-->

      <!--KEYWORDS ID-->
      <h2 class="heading"> Keywords </h2>
      <p class="ya"><?php echo $researchkeywords; ?></h3>

        <!--ABSTRACT ID-->
      <h2 class="heading"> Abstract </h2>
      <p class="ya"><?php echo nl2br($researchabstract); ?></h3>
        <br> <br>

    </div> <!-- closing div class="content" -->
  </div> <!-- closing div class="container"-->

  <?php include 'include/notifalert.php'; ?>

  <!-- link to footer-->
  <?php include 'header_and_footer/footer2.php'; ?>
</body>

</html>