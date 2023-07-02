<!DOCTYPE html>
<html>

<head>
  <!-- general information-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="The goal of this research is to design an accessible and well-designed database that Theresians can use for research purposes.">
  <meta name="keywords" content="database,stcqc,research">
  <meta name="author" content="Alfonso,Dacayan,Dayo,Guillermo,Molina,Panghulan">

  <!-- title and icon link-->
  <title> Contact Us </title>
  <link rel="shortcut icon" type="image/x-icon" href="images/logoicon.ico">

  <!-- CSS link-->
  <link rel="stylesheet" type="text/css" href="css/contactus1.css">

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

    <!-- link to navbar with logo-->
    <?php include 'header_and_footer/header.php'; ?>

    <div class="contact">
      <br>
      <h1><i class="fa fa-envelope"></i>&nbsp Contact Us </h1>
      <br>
    </div>

    <h4 id="text"> If you have any concerns, requests, or messages, please fill up the following: </h4>
    <p id="subtext">or email us at ilawdatabase@gmail.com</p>
    <br>

    <form action="contactconfirm.php" id="frm" method="POST">
      <!-- EMAIL -->
      <div class="label">
        <p> Email Address: <font color="red">* </font> &nbsp <span id="subp">use your STC Gmail account</span></p>
      </div>

      <div class="box">
        <input type="email" placeholder="juanadelacruz@stcqc.edu.ph" id="email" name="email" required><br><br>
      </div>

      <!-- NAME -->
      <div class="label">
        <p> Name: <font color="red">* </font> &nbsp <span id="subp">First Name, Last Name</span>
        </p>
      </div>

      <div class="box">
        <input type="text" placeholder="Juana dela Cruz" id="name" name="name" required><br><br>
      </div>

      <!-- SECTION -->
      <div class="label">
        <p> Section: <font color="red">* </font>
        </p>
      </div>

      <div class="box">
        <input type="text" placeholder="12 STEM B" id="section" name="section" required><br><br>
      </div>

    <!--- SUBJECT  --->
              <div class="label">

        <p> Email Subject: <font color="red">* </font> &nbsp <span id="subp">
        </p>
      </div>

      <div class="box">
        <input type="text" placeholder="Please Add Email Subject" id="subject" name="subject" required><br><br>
      </div>
      <!-- MESSAGE -->
      <div class="label">
        <p> Concerns/Requests/Messages: <font color="red">*</font>
        </p>
      </div>

      <div class="box">
        <textarea id="concerns" name="concerns" placeholder="Please input your concerns/requests/messages here"
          required></textarea><br><br>
      </div>

      <!--SUBMIT-->
      <center>
        <input type="submit" value="Submit" name="submit" id="submit" onclick="notif"><br><br>
      </center>
    </form>
  </div>

  <!-- link to footer-->
  <?php include 'header_and_footer/footer.php'; ?>
</body>

</html>