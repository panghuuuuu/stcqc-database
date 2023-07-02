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
		<title> Pending Researches </title>
		<link rel="shortcut icon" type="image/x-icon" href="images/logoicon.ico">
		
		<!-- CSS link-->
		<link rel="stylesheet" type="text/css" href="css/pending2.css">
		
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
    <?php include 'header_and_footer/header2.php'; ?>

    <section id="pendingTitle">
      <br>
      <h1><i class="fas fa-hourglass-half"></i> &nbsp Pending Researches</h1>
      <br>
    </section>

    <div class="content">

      <!-- table -->
      <script type="text/javascript">
      $(document).ready(function() {
        $('#table').DataTable({
          "order": [
            [0, "asc"]
          ]
        });
      });
      </script>

      <section id="table">


        <!-- PHP CODE FOR SEARCHING KEYWORD -->
        <?php
        include "include/databaseconnect.php";
        
        $sql = ("SELECT uploadtitleID, uploadauthorsID, uploadyearID, uploadsubjectID, uploadtimeID, uploadstatusID
        		FROM uploadresearchpapertable 
        		ORDER BY uploadtimeID DESC
        		");
        $result = $mysqli->query($sql);
        
        if ($result-> num_rows>0) {?>
        <table class="center" id="sorttable">
          <tr>
            <th onclick="sortTable(0)"> Title </th>
            <th onclick="sortTable(1)"> Authors </th>
            <th onclick="sortTable(2)"> Year </th>
            <th onclick="sortTable(3)"> Subject </th>
            <th> Status</th>
          </tr>

          <?php
          // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo '<tr><td>'. $row["uploadtitleID"]."</a></td>
                      <td>". $row["uploadauthorsID"]."</td>
                      <td>". $row["uploadyearID"]."</td>
                      <td>". $row["uploadsubjectID"]."</td>
                      <td>". $row["uploadstatusID"]."</td></tr>";
          }
        } else {?>
          <div id="error">
            <h1><i class="fa fa-exclamation-triangle"></i>&nbsp No pending researches found.</h1>
            <p>Be the first to upload <a href="upload.php">
                <font color="#9b8334">HERE</font>
              </a>.</p>
          </div>
          <?php
        }?>

        </table>
      </section> <!-- closing section id="table" -->

      <!-- link to footer-->
      <?php include 'header_and_footer/footer2.php'; ?>
</body>

</html>


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