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
		<title> <?php echo $_GET['titleID'] ?> </title>
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

  <div class="all">
    <div class="content">
      <div class="background">

        <!--PHP CODE FOR LINKING SEARCH TO INDIV PAGE-->
        <?php include 'include/indivlink.php'; 
        ?>

        <br>
        <!--TITLE ID-->
        <h1 class="title"><?php echo $_GET["titleID"]; ?></h1>

        <!--AUTHORS ID-->
        <h4 class="subheading"><?php echo $row["authorsID"]; ?></h4>

        <!-- SUBJECT ID, YEAR ID-->
        <h4 class="subheading"><?php echo $row["subjectID"];?>,
          <?php echo $row["yearID"]; ?></h4>

        <!--LINKS ID -->
        <a href="<?php echo $row["linksID"];?>" class="open" target="_blank">
          <button type="button" id="access"> Access FULL Research Paper </button>
        </a>
        <br>

        <!--AVERAGE RATING -->
        <?php
      require 'include/indivlink.php';
      require 'include/databaseconnect.php';
      
      $numberID = $row['numberID'];
        
      $sql = ("SELECT commentNUM, nameID, sectionID, researchID, commentID, ratingID, timestampID, AVG(ratingID) AS avg_rating, COUNT(ratingID) AS count_rating
            FROM commentsection WHERE researchID LIKE $numberID
            ");

      $result=$mysqli->query($sql);

        if ($result-> num_rows>0) {
        while($row=$result->fetch_assoc()){
            $average = round($row['avg_rating']);
            $count = $row['count_rating'];
      ?>
        <div id="average">
          <!-- 1 STAR -->
          <?php if ($average == 1) { ?>
          <div id="yellow">
            <span id="s1"> ★ </span>
          </div>
          <div id="grey">
            <span id="s2"> ★ </span>
            <span id="s3"> ★ </span>
            <span id="s4"> ★ </span>
            <span id="s5"> ★ </span>
          </div>

          <span id="starcntr">&nbsp 1 star</span>
          <span id="cmntcntr">(<?php echo $count?>)</span>
          <?php } ?>

          <!-- 2 STARS -->
          <?php if ($average == 2) { ?>
          <div id="yellow">
            <span id="s1"> ★ </span>
            <span id="s2"> ★ </span>
          </div>

          <div id="grey">
            <span id="s3"> ★ </span>
            <span id="s4"> ★ </span>
            <span id="s5"> ★ </span>
          </div>

          <span id="starcntr">&nbsp 2 stars</span>
          <span id="cmntcntr">(<?php echo $count?>)</span>
          <?php } ?>

          <!-- 3 STARS -->
          <?php if ($average == 3) { ?>
          <div id="yellow">
            <span id="s1"> ★ </span>
            <span id="s2"> ★ </span>
            <span id="s3"> ★ </span>
          </div>
          <div id="grey">
            <span id="s4"> ★ </span>
            <span id="s5"> ★ </span>
          </div>

          <span id="starcntr">&nbsp 3 stars</span>
          <span id="cmntcntr">(<?php echo $count?>)</span>
          <?php } ?>

          <!-- 4 STARS -->
          <?php if ($average == 4) { ?>
          <div id="yellow">
            <span id="s1"> ★ </span>
            <span id="s2"> ★ </span>
            <span id="s3"> ★ </span>
            <span id="s4"> ★ </span>
          </div>
          <div id="grey">
            <span id="s5"> ★ </span>
          </div>

          <span id="starcntr">&nbsp 4 stars</span>
          <span id="cmntcntr">(<?php echo $count?>)</span>
          <?php } ?>

          <!-- 5 STARS -->
          <?php if ($average == 5) { ?>
          <div id="yellow">
            <span id="s1"> ★ </span>
            <span id="s2"> ★ </span>
            <span id="s3"> ★ </span>
            <span id="s4"> ★ </span>
            <span id="s5"> ★ </span>
          </div>

          <span id="starcntr">&nbsp 5 stars</span>
          <span id="cmntcntr">(<?php echo $count?>)</span>
          <?php }?>
          <?php }} ?>

        </div>

        <hr>
      </div>
      <!--closing div class="background"-->

      <!--ABSTRACT ID-->
      <h2 class="heading"><i class="fa fa-eye"></i>&nbsp Abstract </h2>
      <p class="ya"><?php include 'include/indivlink.php'; echo nl2br($row["abstractID"]); ?></h3>
        <br> <br>

        <hr style="border: 2px solid #D3D3D3">

        <!--COMMENT SECTION-->
        <!--link to PHP to input comments to database-->
        <?php require 'include/commentreview.php'; ?>

        <!-- INPUT COMMENT -->
      <h2 class="heading"><i class="fa fa-pencil-square-o"></i>&nbsp Leave a Comment </h2>
      <div id="comment">
        <form action="templateindiv.php" method="GET" onsubmit="return saveRatings(this);">

          <!-- get research title - titleID -->
          <input type="hidden" name="titleID" value="<?= $row['titleID'];?>">

          <!-- get research number from database - numberID -->
          <input type="text" name="researchID" value="<?= $row['numberID'];?>" readonly hidden required>

          <!-- STAR RATING -->
          <label id="label">Rating <font color="red">*</font></label>
          <br>
          <div class="rate">
            <input type="radio" id="star5" name="rate" value="5" hidden required />
            <label for="star5" title="text"></label>

            <input type="radio" id="star4" name="rate" value="4" hidden required />
            <label for="star4" title="text"></label>

            <input type="radio" id="star3" name="rate" value="3" hidden required />
            <label for="star3" title="text"></label>

            <input type="radio" id="star2" name="rate" value="2" hidden required />
            <label for="star2" title="text"></label>

            <input type="radio" id="star1" name="rate" value="1" hidden required />
            <label for="star1" title="text"></label>
          </div>

          <!-- NAME -->
          <br><br><br>
          <label id="label">Name <font color="red">*</font></label>
          <br>
          <input type="text" name="nameID" id="form" placeholder="Jane Doe" required>

          <!-- GR & SEC / SUBJ AREA -->
          <br><br>
          <label id="label">Grade and Section / Subject Area <font color="red">*</font></label>
          <br>
          <input type="text" name="sectionID" id="form" placeholder="12 STEM B" required>

          <!-- COMMENT - optional -->
          <br><br>
          <label id="label">Comment <font size="2" color="#A9A9A9"><i>&nbsp(optional)</i></font></label>
          <br>
          <textarea name="commentID" id="form" placeholder="Write your comment here"></textarea>

          <!-- SUBMIT BUTTOM -->
          <br>
          <input type="submit" name="submit" id="post" value="Post Comment">

          <!-- ALERT MSG - Success / Fail -->
          <h5 id="msg"><?= $msg; ?></p>
        </form>
      </div><!-- closing div id="comment"-->

      <!-- SHOW OTHER COMMENTS -->
      <!-- link to PHP that shows the comments -->
      <hr style="border: 2px solid #D3D3D3">
      <h2 class="heading"><i class="fa fa-comment"></i>&nbsp Comments </h2>


      <?php
      require 'include/selectTitle.php';

      if ($result-> num_rows>0) {
      while($row=$result->fetch_assoc()){
    ?>

      <div id="cmntpreview">
        <!-- COMMENT DETAILS - if any-->
        <div id="stars">
          <!-- PHP tp display stars from database-->

          <!-- 1 STAR -->
          <?php if ($row['ratingID'] == 1) { ?>
          <div id="yellow">
            <span id="s1"> ★ </span>
          </div>
          <div id="grey">
            <span id="s2"> ★ </span>
            <span id="s3"> ★ </span>
            <span id="s4"> ★ </span>
            <span id="s5"> ★ </span>
          </div>

          <span id="starcntr">&nbsp 1 star</span>
          <?php } ?>

          <!-- 2 STARS -->
          <?php if ($row['ratingID'] == 2) { ?>
          <div id="yellow">
            <span id="s1"> ★ </span>
            <span id="s2"> ★ </span>
          </div>

          <div id="grey">
            <span id="s3"> ★ </span>
            <span id="s4"> ★ </span>
            <span id="s5"> ★ </span>
          </div>

          <span id="starcntr">&nbsp 2 stars</span>
          <?php } ?>

          <!-- 3 STARS -->
          <?php if ($row['ratingID'] == 3) { ?>
          <div id="yellow">
            <span id="s1"> ★ </span>
            <span id="s2"> ★ </span>
            <span id="s3"> ★ </span>
          </div>
          <div id="grey">
            <span id="s4"> ★ </span>
            <span id="s5"> ★ </span>
          </div>

          <span id="starcntr">&nbsp 3 stars</span>
          <?php } ?>

          <!-- 4 STARS -->
          <?php if ($row['ratingID'] == 4) { ?>
          <div id="yellow">
            <span id="s1"> ★ </span>
            <span id="s2"> ★ </span>
            <span id="s3"> ★ </span>
            <span id="s4"> ★ </span>
          </div>
          <div id="grey">
            <span id="s5"> ★ </span>
          </div>

          <span id="starcntr">&nbsp 4 stars</span>
          <?php } ?>

          <!-- 5 STARS -->
          <?php if ($row['ratingID'] == 5) { ?>
          <div id="yellow">
            <span id="s1"> ★ </span>
            <span id="s2"> ★ </span>
            <span id="s3"> ★ </span>
            <span id="s4"> ★ </span>
            <span id="s5"> ★ </span>
          </div>

          <span id="starcntr">&nbsp 5 stars</span>
          <?php } ?>

        </div><!-- closing div id="stars"-->

        <div id="details">
          <p id="cmntname"><?= $row['nameID']?></p>
          <p id="cmntsec"><?= $row['sectionID']?> </p>
          <p id="cmntdate"><?= $row['timestampID']?></p>

          <p id="cmnt"><?= $row['commentID']?></p>
        </div> <!-- closing div id="details"-->
      </div> <!-- closing div id="cmntpreview"-->

      <!-- COMMENT DETAILS - if none-->
      <?php
          }
        }else  {
    ?>
      <p id="nocmnt">No comments. Be the first to review!</p>
      <?php
        }
    ?>

      <hr style="border: 2px solid #D3D3D3">

      <!--RELATED RESEARCHES-->
      <?php
        
        require 'include/indivlink.php';
        require 'include/databaseconnect.php';
      ?>
      <h2 class="heading"><i class="fa fa-book"></i>&nbsp Other Researches in <?php echo $row["subjectID"];?></h2>

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
        <table class="center" id="sorttable">
          <tr>
            <th onclick="sortTable(0)"> Title <i style="align:right;" class="fa fa-sort"></i></th>
            <th onclick="sortTable(1)"> Authors <i style="align:right;" class="fa fa-sort"></i></th>
            <th onclick="sortTable(2)"> Year </th>
          </tr>

          <!-- PHP CODE FOR SEARCHING SUBJECT -->
          <?php
          
          require 'include/indivlink.php';
          require 'include/databaseconnect.php';

        $keywordfromform = $row["subjectID"];
        
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
          <tr>
            <td><a href="templateindiv.php?titleID=<?php echo $row["titleID"]; ?>"
                style="color: #152238; text-decoration: underline; font-weight:bold;">
                <?php echo $row["titleID"]; ?></a>
            </td>
            <td><?php echo $row["authorsID"]?></td>
            <td><?php echo $row["yearID"]?></td>
          </tr>
          <?php
          }
        } else {
          echo "<tr><td> 0 results </td><td> 0 results </td><td> 0 results </td><td> 0 results </td><tr>";
        }
        $mysqli->close();
        ?>
        </table>
      </section> <!-- closing section id="table" -->

    </div> <!-- closing div class="content" -->
  </div> <!-- closing div class="all"-->

  <!-- link to footer-->
  <?php include 'header_and_footer/footer2.php'; ?>
</body>

</html>

<!-- JS CODE FOR SORTING -->
<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("sorttable");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc";
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount++;
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>

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