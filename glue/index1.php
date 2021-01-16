<html>
<head>
  <title>GLUE</title>
  <title>GLUE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="w3.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="j../s/bootstrap.min.js"></script>
  <style type="text/css">
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
}

.navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
}
.navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;

}
 .carousel-inner img {
      width: 600px;
      height: 50%;
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none;
    }
  }



#slide  {
    width: 100px;
    height: 150px;
    position: relative;
    -webkit-animation-name: imgslide;
     -webkit-animation-delay:0s;  /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 15s;
    animation-delay: 0s; /* Safari 4.0 - 8.0 */
    animation-name: imgslide;
    animation-duration: 15s;

}
#ha{
    width: 100px;
    position: relative;
    -webkit-animation-name: example; /* Safari 4.0 - 8.0 */

    -webkit-animation-duration: 10s; /* Safari 4.0 - 8.0 */
    animation-name: example;
    animation-duration: 10s;

  }
#about{
  width: 100px;
    height: 150px;
    position: relative;
    -webkit-animation-name: imgslide;
     -webkit-animation-delay:0s;  /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 15s;
    animation-delay: 0s; /* Safari 4.0 - 8.0 */
    animation-name: imgslide;
    animation-duration: 15s;

}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes example {
     0%  {left: -1500px; right: 0px;}
    25%  { right:-1500px; left: 0px;}
    50%  { left:0px; right:0px;}
    75%  { left:0px; right:0px;}
    100% { left:0px; right:0px;}
}

/* Standard syntax */
@keyframes example {
     0%  {left:-1500px; right: 0px;}
    25%  { right:-1500px; left: 0px;}
    50%  { left:0px; right:0px;}
    75%  { left:0px; right:0px;}
    100% { left:0px; right:0px;}
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes imgslide {
     0%  {left: -1000px; right: 0px;}
    20%  {left: -1000px; right: 0px;}
    50%  { right:-1000px; left: 0px;}
    75%  { left:0px; right:0px;}
    100% { left:0px; right:0px;}
}

/* Standard syntax */
@keyframes imgslide {
     0%  {left: -1000px; right: 0px;}
    20%  {left: -1000px; right: 0px;}
    50%  { right:-1000px; left: 0px;}
    75%  { left:0px; right:0px;}
    100% { left:0px; right:0px;}
}
.image {
    overflow: hidden;
    transition-duration: 0.8s;ib
    transition-property: transform;
}
.image:hover {
    transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
}

</style>
<header>
<header style="position: absolute;top: 0px;">
<nav id="ha" role="navigation" class="navbar  navbar-default navbar-static-top hidden-print" style="width: 100%;position: fixed;background-color: #32CD32;">
    <div class="container ">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="http://14.139.153.11" class="navbar-brand"><b>GECH</b></a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a style="animation-duration: 2s" class="w3-animate-bottom" href="index.php"><span class="glyphicon glyphicon-home"></span><b>Home</b></a></li>
        <li><a style="animation-duration: 2s" class="w3-animate-top" href="http://www.fsmk.org"><b>Fsmk</b></a></li>
                <li><a style="animation-duration: 2s" class="w3-animate-bottom" href="core.php"><b>Core</b></a></li>
        <li><a style="animation-duration: 2s" class="w3-animate-top" href="docdisp.php"><span class="glyphicon glyphicon-file"></span><b>Documents</b></a></li>
        <li><a style="animation-duration: 2s" class="w3-animate-bottom" href="./camp/index.php"><b>Camps</b></a></li>
                <li><a style="animation-duration: 2s" class="w3-animate-top" href="login.php"><span class="glyphicon glyphicon-log-in"></span><b>Login</b></a></li>
                 <li><a><b>2019-10-24</b></a></li>
            </ul>
        </div>
    </div>
    <!--<img  id="header-image" src="../images/header.png" width="100%"> -->
</nav>
</header>

</header></head><body>

<div style="width: 100%;min-height: 330px;background-color: #32CD32;">
  <div class="container-fluid" align="center" style="padding-top: 75px; ">

<div id="slide">
  <div style="animation-iteration-count: 3;" class="w3-spin">
    <img class="image" src="images/glue1.png" alt="glue" style="width: 150px;box-shadow: 1px 1px 20px #fff;border-radius: 50%;">
    </div>
    </div>
  </div>
  <h3 class=" w3-center w3-animate-zoom" style="color: white; animation-duration: 5s;" align="center"><b>GECH Linux Users And Enthusiasts</b></h3>
</div>
<!-- <marquee><a href="./camp/index.php" style="color: #03af64; font-size: 20px"><span class="w3-spin fa fa-truck"><b>GLUFRECA'2K18 Registrations Started, limited Seats.</b></a></marquee>   -->
<hr>
<div class="jumbotron text-center" style="text-align: justify; padding-left: 4%;padding-right: 4%; padding-top: 42px;">
    <br>
    <div class="w3-animate-right" style="animation-duration: 3s">
  <h2 style="animation-iteration-count: 1" class="w3-spin" align="center"> G.L.U.E.</h2><br></div>
  <p style="animation-duration: 4s;" class="w3-animate-right">GLUE is a group of enthusiastic students from Government Engineering College Hassan , who believe in learning, exploring and sharing free software technologies . For the same, GLUE conducts technical sessions and discussions on every Saturday. GLUE has also conducted technical workshops and hackathons in the college. It is also a platform where students,teachers and professionals from industry to learn and share about free and open source technologies.
  GECH GNU/Linux Users and Enthusiasts(GLUE) is a Linux user group of GECH which organizes regular events and meetups to learn and share their knowledge on various FOSS technologies. GLUE was started on August 2013 and currently it is having more than 600 active members. It is successfully serving its purpose.
 </p>
</div>
 <hr>
<div class="container-fluid">
  <div id="example" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#example" data-slide-to="0" class="active"></li>
      <li data-target="#example" data-slide-to="1"></li>
      <li data-target="#example" data-slide-to="2"></li>
      <li data-target="#example" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img class="w3-animate-zoom" src="images/c1.jpg" width="500" height="345">
        <div class="carousel-caption">
         <h3>  Glue Images</h3>
        </div>
      </div>
       <div class="item">
        <img src="images/1.jpg" width="500" height="345">
        <div class="carousel-caption">
          <h3>GLUFRECA2k16</h3>
         </div>
        </div>
      <div class="item">
        <img src="images/c2.jpg" width="500" height="345">
        <div class="carousel-caption">
          <h3>Fsmk</h3>
        </div>
      </div>

      <div class="item">
        <img src="images/c3.jpg" width="500" height="345">
        <div class="carousel-caption">
          <h3>GECH</h3>

        </div>
      </div>

      <div class="item">
        <img src="images/c4.jpg" width="500" height="345">
        <div class="carousel-caption">
          <h3>Principal</h3>

        </div>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#example" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#example" data-slide="next">
    <span class="icon-next"></span>
  </a>
</div>
</div>
<hr>
<div class="container" id="googleMap" style="height:400px;width:100%"></div>
<script>
function myMap() {

var myCenter = new google.maps.LatLng(13.01042,76.1212896);
var mapProp = {center:myCenter, zoom:17, scrollwheel:false, draggable:true, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var infowindow = new google.maps.InfoWindow({
    content: " GECH GNU/Linux Users and Enthusiasts(GLUE) !"})
var marker = new google.maps.Marker({position:myCenter,icon:'images/glue2.png'});

marker.setMap(map);
infowindow.open(map,marker);

}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAos6c4qawktI5e0gLEFClLujBOKqU9GVM&amp;callback=myMap"></script>



</body><hr><div class="w3-animate-left" style="background-color: lightgrey;min-height: 200px">
  <div class="container-fluid bg-grey">
  <h2 class="text-center">Contact</h2>
  <div class="container">
    <div class="col-sm-6" style="padding-left: 100px;">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Hassan, India</p><p>
     <!-- <p><span class="glyphicon glyphicon-phone"></span> +919742563794 </p>-->
      </p><p><span class="glyphicon glyphicon-envelope"></span>glue.core[at]gmail[dot]com</p>
    </div>

    <form method="POST" action="index.php">
    <div class="col-sm-5">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="3"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-success pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
</form>
  </div>
</div>
</div></html>
