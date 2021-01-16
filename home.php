<?php
// session_start();
include 'config.php';
// include 'session.php';
// $servername = "localhost";
// $username = "root";
// $password = "password";
// $dbname="cms"
//
// // Create connection
// $conn = new mysqli($servername, $username, $password,$dbname);
//
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// $servername = "localhost";
// $username = "root";
// $password = "password";
// $dbname="cms";
//
// $conn = new mysqli($servername, $username, $password,$dbname);
//
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>About</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link href="css/menu.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/layout.css">
  <style media="screen">
.mydiv
{  position: absolute;
width:auto;
height: auto;
text-align: center;
/* overflow: scroll; */
/* padding-left: 20%; */
width: 100%;
height:70%;
top:50px;
-webkit-animation: mymove 5s infinite; /* Chrome, Safari, Opera */
}

/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
50% {top: 250px;}
}
/* Standard syntax */
@keyframes mymove {
0% {top: 250px;}
}
  </style>
  <body>
    <header>
      <?php include 'nav.php'; ?>
              </header>
<div class="a-square">
  <div class="b-square">
    <h2 class="pz">Activities</h2>
    <div class="mydiv">
        <?php
        $sql = "SELECT event_name FROM event";
        if($res = mysqli_query($conn, $sql)){
        		while($row = mysqli_fetch_array($res)){
        			echo "<tr>";
        				echo "<td>" . $row['event_name'] ."<br>"."</td>";
        			echo "</tr>";
        		}
        		echo "</table>";
        		mysqli_free_result($res);
        	}
        ?>
      </div>
</div>
  <div class="c-square">
    <div class="slideshow-container">
      <div class="mySlides fade">
        <img src="img/8.png" style="width:100%">
      </div>
      <div class="mySlides fade">
      <img src="img/2.png" style="width:100%">
    </div>
    <div class="mySlides fade">
      <img src="img/3.png" style="width:100%">
    </div>
    </div>
    <br>
    <div style="text-align:center">
      <span class="dot"></span>
      <span class="dot"></span>
          <span class="dot"></span>
    </div>
  </div>
  <div class="b1-square">
    <div class="d-square">
      <p class="pz">Flash News</p>
      <!-- <span></span> -->
      <div class="mydiv">
        <?php
        $sql = "SELECT event_name FROM event ORDER BY RAND()";
        if($res = mysqli_query($conn, $sql)){
            while($row = mysqli_fetch_array($res)){
              echo "<tr>";
                echo "<td>" . $row['event_name']."<img src=img/new0.gif width=30px height=30px>"."<br>"."</td>";
              echo "</tr>";
            }
            echo "</table>";
            mysqli_free_result($res);
          }
        ?>
      </div>
    </div>
    <div class="e-square">
      <p class="pz">Notifications</p>
      <div class="mydiv">
        <?php
        $sql = "SELECT * from event_detail ed,event e where e.event_name=ed.event_name";
        if($res = mysqli_query($conn, $sql)){
            while($row = mysqli_fetch_array($res)){
              // echo "<tr>";
              //   echo" $row[event_name] "."<br>";
              // echo "</tr>";
              echo "$row[c_name] Organizing the $row[event_name] event on $row[date] at $row[time] in $row[location] <br> ";
            }
            echo "</table>";
            mysqli_free_result($res);
          }
        ?>
      </div>
      <br>
    </div>
  </div>
  <br>
  <br>
  <br>
  <div class="f-square">
    <h1 class="dis0"> <u>ABOUT US</u> </h1>
    <p class="dis">Club’s management system(CMS) is a distributed web application
developed to maintain the details of club’s present in any organisation or
institution. <br>
CMS is made for a speedy access to accurate data and
to help the club admin achieve their goals.CMS is
so useful in the organization which it creates an impact on the organization’s
performance, functions.</p>
  </div>
</div>


<script>
var slideIndex = 0;
showSlides();
function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 1000); // Change image every 2 seconds
}
</script>
  </body>
</html>
<?php
   // session_start();
   //
   // if(session_destroy()) {
   //    header("Location: login.php");
   // }
?>
