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
		<title> About Us </title>
		<link rel="shortcut icon" type="image/x-icon" href="images/logoicon.ico">
		
		<!-- CSS link-->
		<link rel="stylesheet" type="text/css" href="css/aboutus2.css">
		
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
    <?php include 'header_and_footer/header.php'; ?>

    <div class="how-container">
      <div class="left-container">
        <div class="left-content">
          <img src="images/bgule.png">
        </div>
      </div>
      <div class="right-container">
        <div class="right-content">
          <center>
            <h2 id="title"> About ILAW </h2>

            <p class="text"> Integrated Library Automated Website (ILAW) Database was created by a group of researchers
              composed of Grade 12 students, from 12 STEM B. The goal of ILAW is to provide an <mark
                id="highlight">accessible and well-designed database that Theresians can use for research
                purposes.</mark> <br><br>

              <img src="images/bulb.png" width=15% height=15%>
              <br>
            <p class="text"> The name ILAW was inspired by the school’s motto, <b>“Let your light shine”</b> that
              encourages students to <mark id="highlight">use their talent and skills in bringing out a positive change
                to society.</mark> The rise in the logo reflects how the students’ knowledge is also growing with the
              increasing number of research papers published by Theresians.</p>


              <p class="text" style="font-size: 13px;"></font><em><b>Logo Designers:</b> Bianca Guillermo (12 STEM B) and Raphaelle Ringor (12 HUMSS/GA B)</em><br><br>
              <em><b>Research Exhibit Description Writers:</b> Agatha Doval Santos, Candice Nuñez, Ria Mendoza (12 STEM A)</em><br><br>
            </p>

            <a href="https://stcqcdatabase.000webhostapp.com/index.php" style="text-decoration: none;"
              target="_blank"><button type="submit" id="btn1"><i class="fa fa-lightbulb-o"></i>&nbsp
                ILAW 1.0</button></a>
            &nbsp&nbsp&nbsp
            <a href="page2.php" style="text-decoration: none;"><button type="submit" id="btn2"><i
                  class="fa fa-caret-square-o-right"></i>&nbsp
                Get to Know Us</button></a>
            <hr style="border: 2px solid transparent;">
          </center>
        </div>
      </div>
    </div>
  </div>
  <!--closing div class="container"-->

  <!-- link to footer-->
  <?php include 'header_and_footer/footer.php'; ?>
</body>

</html>