<!DOCTYPE html>
<html>

<style>
/*header*/
header {
  background-color: white;
  padding-top: 5px;
  min-height: 60px;
  border-bottom: 0;
  overflow: visible;
  box-shadow: 0 6px 6px -6px rgba(0, 0, 0, .2);
  position: relative;
  z-index: 2;
}

nav {
  margin-right: 90px;
  margin-left: 90px;
}

header a {
  color: black;
  text-decoration: none;
  text-transform: uppercase;
  font-size: 11px;
  font-weight: bold;
  font-family: 'Karla', sans-serif;
}

header ul {
  margin: 0;
  padding: 0;
}

header li {
  float: right;
  font-family: 'Karla', sans-serif;
  color: #152238;
  display: inline-block;
  padding: 14px 16px;
}

header a:hover {
  background: transparent;
  border-bottom: 3px solid #ffb814;
  transition: 0.2s;
}
#logo img {
   width:90px; 
   height: 50px; 
   float: left; 
   margin-left: 100px;
}

/*search*/
#search {}

form.example input[type="text"] {
  padding: 7px;
  font-size: 14px;
  border: 1px solid grey;
  float: left;
  width: 70%;
  background: white;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  font-family: "Karla", sans-serif;
  margin-top: 5px;
}

form.example button {
  float: left;
  width: 10%;
  padding: 5px;
  background: #e8b828;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  margin-top: 5px;
}

form.example button:hover {
  background: #c9a432;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}

/*screen sizer*/
@media screen and (max-width: 600px) {
nav {
  margin-right: 10px;
  margin-left: 10px;
}
#logo img {
  margin-right: 10px;
  margin-left: 20px;
}
header li {
  padding: 14px 5px;
}
#searchbar {
    margin: 5px 0 5px 20px;
}
#submitbtn {
    margin: 5px 20px 5px 0;
}
}

@media screen and (max-width: 1160px) {
  .header {
    background-color: white;
    padding-top: 5px;
    min-height: 30px;
    width: 100%;
  }

  .header #search input[type="text"] {
    margin-left: auto;
    margin-top: 5px;
    width: 450px;
  }
}

/* scroll bar */
::-webkit-scrollbar {
  width: 8px;
}

::-webkit-scrollbar-track {
  background: #d3d3d3;
}

::-webkit-scrollbar-thumb {
  background-color: #43536d;
  border-radius: 20px;
}
</style>

<body>
  <header>
    <div id="logo">
      <a href="home.php"> <img src="images/ilaw.png">
      </a>
    </div>

    <!-- navbar-->
    <nav>
        <ul>
          <li><a href="index.html" style="font-family: Karla, sans-serif; font-weight: bold;"><i class="fas fa-sign-out-alt"></i>&nbsp Logout </a></li>
          <li><a href="aboutus.php" style="font-family: Karla, sans-serif; font-weight: bold;"><i
                class="fa fa-address-book w3-tiny"></i>&nbsp About Us </a></li>
          <li><a href="upload.php" style="font-family: Karla, sans-serif; font-weight: bold;"><i class="fa fa-upload w3-small"></i> &nbsp Upload </li>
          <li><a href="home.php" style="font-family: Karla, sans-serif; font-weight: bold;"><i
                class="fa fa-home w3-small"></i>&nbsp Home </a></li>
        </ul>
    </nav>

    <!-- search bar -->
    <section id="search">
      <form class="example" action="searchsubject.php" style="margin:auto;max-width:600px">
        <input type="text" name="Search" id="searchbar" placeholder="Search in <?php if(isset($_GET['Subject'])){echo $_GET['Subject'];}
      elseif(isset($_GET['submitsearch'])){echo $_GET['SubjectSearch'];}?>..."
          value="<?php if(isset($_GET['submitsearch'])){echo $_GET['Search'];}?>">
        <input type="hidden" name="SubjectSearch" value="<?php if(isset($_GET['Subject'])){echo $_GET['Subject'];}
      elseif(isset($_GET['submitsearch'])){echo $_GET['SubjectSearch'];}?>">
        <button type="submit" name="submitsearch" id="submitbtn"><i class="fa fa-search"></i></button>
      </form>
    </section>
  </header>
</body>

</html>