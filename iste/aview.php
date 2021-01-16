<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<meta name="apple-mobile-web-app-capable" content="yes" />
  <title>EXECUTIVES</title>
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.css.map">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css.map">
<link rel="stylesheet" href="css/bootstrap-grid.css">
<link rel="stylesheet" href="css/bootstrap-grid.css.map">
<link rel="stylesheet" href="css/bootstrap-grid.min.css">
<link rel="stylesheet" href="css/bootstrap-grid.min.css.map">
<link rel="stylesheet" href="css/bootstrap-reboot.css">
<link rel="stylesheet" href="css/bootstrap-reboot.css.map">
<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
<link rel="stylesheet" href="css/bootstrap-reboot.min.css,map">
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.js,map"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js.map"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.js.map"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js.map"></script>
  </head>
  <header>
    <nav>
      <!-- Simulate a smartphone / tablet -->
    <div class="mobile-container">

    <!-- Top Navigation Menu -->
    <div class="topnav">
      <a href="index.php" class="active">HOME</a>
      <div id="myLinks">
        <a href="about.php">ABOUT</a>
        <a href="event.php">EVENTS</a>
        <a href="gallery.php">GALLERY</a>
        <a href="core.php">OUR EXECUTIVES</a>
        <a href="https://goo.gl/forms/AP7EbuKaSTb2vYcJ2">EVENT REGISTRATION</a>
        <a href="login.php">LOGIN</a>
        <div class="dropdown">
          <a href="#"onclick="MyFunction()" class="dropbtn">GET IN TOUCH WITH US</a>
  <div id="myDropdown" class="dropdown-content">
    <a class="dropdown-item" href="http://www.isteonline.in/">MAIN CHAPTER</a>
    <a class="dropdown-item" href="http://gechassan.ac.in">GEC HASSAN</a>
    <a class="dropdown-item" href="faq.php">CONTACT US</a>
    <a class="dropdown-item" href="https://www.google.co.in/maps/place/Government+Engineering+College,+Hassan/@13.0102955,76.1191007,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba5485b583251b7:0x513d895c8cc75816!8m2!3d13.0102955!4d76.1212894">LOCATE US</a>
    <a class="dropdown-item" href="dev.php">CONTRIBUTOR</a>
  </div>
</div>
      </div>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <span style="font-size:20px;cursor:pointer">&#9776;</span>
      </a>
    </div>
  </div>
    </nav>
    <script>
    function myFunction() {
      var x = document.getElementById("myLinks");
      if (x.style.display === "block") {
        x.style.display = "none";
      } else {


        x.style.display = "block";
      }
    }
    /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function MyFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
    </script>
  </header>
  <body class="agec">

  </body>
</html>
