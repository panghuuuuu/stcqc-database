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
		<title> Upload </title>
		<link rel="shortcut icon" type="image/x-icon" href="images/logoicon.ico">
		
		<!-- CSS link-->
		<link rel="stylesheet" type="text/css" href="css/upload3.css">
		
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

  <!-- ECHO SUBJECT-->
  <section id="uploadTitle">
    <br>
    <h1><i class="fa fa-upload"></i> &nbsp Upload your paper here</h1>
    <br>
  </section>

  <div class="content">
    <div class="container">

      <!--- PENDING RESEARCHES -->
      <a href="pending.php"><button id="pending"><i class="fas fa-hourglass-half"></i> &nbsp Pending
          Researches</button></a>
      <br>
      <hr style="border: 2px solid transparent;">

      <form action="addresearch.php" id="frm" method="POST" required>
        <!--- EMAIL -->
        <div class="row">
          <div class="heading">
            <label for="email"> Email Address<font color="red">*</font>
              <br>
              <div id="subtext">use your STC Gmail account</div>
            </label>
          </div>
          <div class="area">
            <input type="Email" placeholder="juanadelacruz@stcqc.edu.ph" id="email" name="email"
              style=" width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical; outline: none; background-color:#cfe2f3;"
              required>
          </div>
        </div>

        <!-- RESEARCH TITLE -->

        <div class="row">
          <div class="heading">
            <label for="newtitle">Research Title<font color="red">*</font></label>
          </div>
          <div class="area">
            <input type="text" placeholder="A Study..." name="newtitle" minlength="10" style="background-color:#cfe2f3"
              required>
          </div>
        </div>

        <!-- AUTHORS -->
        <div class="row">
          <div class="heading">
            <label for="newauthors">Name of Researchers<font color="red">*</font>
              <br>
              <div id="subtext">First Name Initial, Last Name</div>
            </label>
          </div>
          <div class="area">
            <input type="text" id="newauthors" name="newauthors" placeholder="J. dela Cruz, J. Doe,  M. Reyes"
              style="background-color:#cfe2f3" required>
          </div>
        </div>

        <!-- SUBJECT -->
        <div class="heading">
          <label for="newsubject">Subject<font color="red">* </font></label>
        </div>
        <div class="area">
          <select id="newsubject" name="newsubject" style="background-color:#cfe2f3;" required>
            <option value=""> </option>
            <option value="Quantitative Research">Quantitative Research</option>
            <option value="Qualitative Research">Qualitative Research</option>
            <option value="Science">Science</option>
            <option value="Theology">Theology</option>
            <option value="TLE">TLE</option>
            <option value="Mathematics">Mathematics</option>
            <option value="Filipino">Filipino</option>
            <option value="English">English</option>
            <option value="Social Sciences">Social Sciences</option>
            <option value="Computer">Computer</option>
          </select>

          <!-- YEAR -->
          <div class="form-inline">
            <label for="newyear" id="newyear">Year Published<font color="red">*</font></label>
            <input type="number" name="newyear" min="2000" style="background-color:#cfe2f3" id="newnum" required>
          </div>
        </div>

        <!-- KEYWORDS -->
        <div class="row">
          <div class="heading">
            <label for="newkeywords">Keywords<font color="red">*</font></label>
          </div>
          <div class="area">
            <input type="text" id="newkeywords" name="newkeywords" style="background-color:#cfe2f3"
              placeholder="environment, technology, education" required>
          </div>
        </div>

        <!-- ABSTRACT -->
        <div class="row">
          <div class="heading">
            <label for="abstract">Abstract / Summary<font color="red">*</font></label>
          </div>

          <div class="area">
            <textarea id="newabstract" name="newabstract" style="height:250px; resize: none;" placeholder="The study..."
              name="newpaper" required></textarea>
          </div>
        </div>

        <!--- RESEARCH PAPER -->
        <div class="row">
          <div class="heading">
            <label for="link"> Research Paper Link <font color="red">*</font>
              <br>
              <div id="subtext">use Google Drive and share to STCQC</div>
            </label>
          </div>
          <div class="area">
            <input type="url" placeholder="https://drive.google.com/file/" name="newpaper" required>
          </div>
        </div>

        <!-- HIDDEN INPUT FOR STATUS -->
        <input type="text" id="newstatus" name="newstatus" value="Reviewing" hidden required>

        <!--- TERMS -->
        <br>
        <div class="row">
          <center>
            <input type="checkbox" id="terms" name="terms" style="margin-left: 20px; margin-top: 10px;" required><span
              id="terms" style="font-family: Karla,sans-serif; font-size: 15px;"> &nbsp I hereby acknowledge that I have
              read and understood the <span id="consent" onclick="myFunction()"
                style="color:red; cursor: pointer; font-weight:bold;">
                terms and conditions </span> relating to the use of the information that I will be uploading.<font
                color="red">*</font></span>
          </center>


          <script>
          function myFunction() {
            alert(
              "I hereby give my consent to the STCQC Learning Resource Center to upload our research paper to the Integrated Library Automated Website (ILAW) Database. This agreement is in accordance with the Data Privacy Act of 2012 [RA 10173]. I agree that the LRC will be able to: \n\n(1) give access to the research papers exclusive to the students and teachers of the school; \n(2) allow students and teachers to download and print the research paper; \n(3) and use our study as a reference to other studies made by the students of the school."
            );
          }
          </script>
        </div>

        <!--- SUBMIT -->
        <div class="row">
          <br>
          <center><input type="submit" value="Submit" name="submit" id="submit" onclick="notif"></center>
        </div>
      </form>
      <script>
      function notif(obj) {
        if (obj.value == "notif") {
          document.getElementById('frm').action = 'notifalert.php'
        }
        while {
          document.getElementById('frm').action = 'mailalert.php'
        } else {
          document.getElementById('frm').action = 'index.html'
        }
        document.getElementById('frm').submit();
      }
      </script>
    </div>

    <!-- link to footer-->
    <?php include 'header_and_footer/footer2.php'; ?>
  </div>
</body>

</html>