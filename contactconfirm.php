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
		<title> Message Preview </title>
		<link rel="shortcut icon" type="image/x-icon" href="images/logoicon.ico">
		
		<!-- CSS link-->
		<link rel="stylesheet" type="text/css" href="css/contactconfirm1.css">
		
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
      <h1><i class="fa fa-envelope"></i>&nbsp Message Preview </h1>
      <br>
    </div>

    <div id="check">
      <h1><i class="fas fa-check-circle"></i>&nbsp Your message has been sent.</h1>
      <p>Please wait for a reply regarding your concerns/requests/messages.<span
          style="color: #858585; font-style: italic;">(1-3 days)</span>. <br>You may now go back to our <a
          href="home.php">
          <font color="#9b8334">Homepage</font>
        </a>.</p>
    </div>
    <center>
      <hr style="border: 1px solid #C0C0C0;" id="divider">
    </center>

    <!--PHP CODE TO UPLOAD CONCERN TO DATABASE-->
    <?php
            include "include/databaseconnect.php";

          date_default_timezone_set('Asia/Manila');

        	$contactname = $_POST["name"];
          $contactsection = $_POST["section"];
          $contactemail = $_POST["email"];
        	$contactconcerns = $_POST["concerns"];
          $contactdate = date("Y-m-d H:i:s");

          $contactemail = addslashes($contactemail);
        	$contactname = addslashes($contactname);
        	$contactsection = addslashes($contactsection);
        	$contactconcerns = addslashes($contactconcerns);
        
           $sql = "INSERT INTO contactformtable (contactnameID, contactsectionID, contactemailID, contactmessageID, contactdateID) 
           VALUES (?, ?, ?, ?, ?)";
           $result = $mysqli->query($sql);
        
        	if ($result) {
        	    echo "<script type='text/javascript'>alert('Message failed to send. Please try again.')</script>";
        	} else {
        	    echo "<script type='text/javascript'>alert('Message sent successfully! Please wait for the admin to contact you.')</script>";
        	}
        
        	$stmt = mysqli_stmt_init($mysqli);
        	if (!mysqli_stmt_prepare($stmt, $sql)) {
        		echo "SQL error";
        	} else {
        		mysqli_stmt_bind_param($stmt, "sssss", $contactname, $contactsection, $contactemail, $contactconcerns, $contactdate);
        		mysqli_stmt_execute($stmt);
        	}
        
        $mysqli->close();
        ?>

    <div id="msgpreview">
      <p id="msgname"><?php echo $contactname; ?></p>
      <p id="msgsec"><?php echo $contactsection; ?> </p>
      <p id="msgdate"><?php echo $contactdate; ?></p>
      <p id="msg"><?php echo $contactconcerns; ?></p>
    </div> <!-- closing div id="msgpreview"-->aler

  </div>

  <!-- email to admin -->
  <?php include 'include/confirmalert.php'; ?>

  <!-- link to footer-->
  <?php include 'header_and_footer/footer2.php'; ?>
</body>

</html>