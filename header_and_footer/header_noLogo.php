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
  z-index: 4;
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
  padding: 14px 8px;
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
/* pop up */
.popup {
  font-weight: bold;
  font-size: 11px;
  font-family: Karla;
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 200px;
  background-color: #F8F8FF;
  color: black;
  text-align: center;
  border-radius: 7px;
  padding: 8px 0;
  position: absolute;
  z-index: 99;
  bottom: -320%;
  left: 25%;
  margin-left: -80px;
}

.popup a { 
  border-bottom: 3px solid #ffb814;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #F8F8FF transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
</style>
<body>
  <header>
    <!-- navbar-->
    <nav>
      <ul>
        <ul>
            <li><a href="index.html" style="font-family: Karla, sans-serif; font-weight: bold;"><i class='	fas fa-user-circle w3-small'></i>&nbsp Login </a></li>
          <li><a href="aboutus2.php" style="font-family: Karla, sans-serif; font-weight: bold;"><i
                class="fa fa-address-book w3-tiny"></i>&nbsp About Us </a></li>
          <li><i class="fa fa-upload w3-small"></i>
                <div class="popup" onclick="myFunction()"> <h1 style="text-transform: uppercase; font-size: 11px; font-weight: bold; font-family: Karla; display: inline;"> Upload  </h1>
                            <span class="popuptext" id="myPopup"> Only members can upload. <a href="login.php"> Login </a> to continue </span>
                        </div>
                    <script>
                        function myFunction() {
                            var popup = document.getElementById("myPopup");
                            popup.classList.toggle("show");
                            }
                    </script> </li>
          <li><a href="home2.php" style="font-family: Karla, sans-serif; font-weight: bold;"><i
                class="fa fa-home w3-small"></i>&nbsp Home </a></li>
        </ul>
    </nav>
  </header>
</body>

</html>