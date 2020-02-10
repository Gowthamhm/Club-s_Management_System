<html><head><title>Documents</title><title>GLUE</title><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="w3.css"><link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"><script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script><style type="text/css">
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

</style><header>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/bootstrap.css.map">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css.map">
  <link rel="stylesheet" href="../css/bootstrap-grid.css">
  <link rel="stylesheet" href="../css/bootstrap-grid.css.map">
  <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../css/bootstrap-grid.min.css.map">
  <link rel="stylesheet" href="../css/bootstrap-reboot.css">
  <link rel="stylesheet" href="../css/bootstrap-reboot.css.map">
  <link rel="stylesheet" href="../css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="../css/bootstrap-reboot.min.css,map">
<script type="text/javascript" src="../js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="../js/bootstrap.bundle.js,map"></script>
<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.bundle.min.js.map"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/bootstrap.js.map"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js.map"></script>
<header>
<ul id="nav" class="navbar">
  <li><a href="../home.php">CLUB`S MANAGEMENT SYSTEM</a></li>

      <li><a href="index.php">GLUE</a></li>
      <li><a href="docdisp.php">EVENTS/SESSION</a></li>
      <!-- <li><a href="docdisp.php">Document</a></li> -->
      <!-- <li><a href="gallery.php">GALLERY</a></li> -->
      <li><a href="core.php">CORE</a></li>
      <li><a href="../eventr.php">EVENT REGISTRATION</a></li>
      <li> <a href="camp/">CAMP</a> </li>
      <li> <a href="../alogin.php">LOGIN</a> </li>
      <li><a href="#">GET IN TOUCH WITH US</a>
          <ul>
              <li><a   href="">FSMK</a></li>
              <li><a   href="http://gechassan.ac.in">GEC HASSAN</a></li>
              <li><a   href="index.php#f">CONTACT US</a></li>
              <li><a   href="https://www.google.co.in/maps/place/Government+Engineering+College,+Hassan/@13.0102955,76.1191007,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba5485b583251b7:0x513d895c8cc75816!8m2!3d13.0102955!4d76.1212894">LOCATE US</a></li>
              <!-- <li><a href="dev.php">CONTRIBUTOR</a></li> -->
          </ul>
      </li>
      <li><p id="demo"></p></li>

  </ul>
<header >
</header>
</header></head>
<script type="text/javascript">
var d = new Date();
document.getElementById("demo").innerHTML = d.toDateString();
</script>
<body>
<div class="container" style="border:solid thin black;border-radius: 10px;">
  <h2 class="well well-sm" style="background-color:#33ffe0;text-align: center;animation-duration: 3s;text-shadow:1px 1px 0 #444;"><b>Documents</b></h2><br>
  <!-- <div style="animation-duration: 3s;" class="w3-animate-zoom">-->
	<div class="table-responsive w3-animate-zoom">
	<table class="table table-striped">
		<thead>
			<tr>
				<th style="color: #FF69B4;"><b>Name</b></th>
				<th style="color: #FF69B4;"><b>ID</b></th>
				<th style="color: #FF69B4;"><b>Topic</b></th>
				<th style="color:#FF69B4;"><b>Date</b></th>
				<th style="color: #FF69B4;"><b>Description</b></th>
				<th style="color: #FF69B4;"><b>Attendence</b></th>
				<th style="color: #FF69B4;"><b>Feedbacks</b></th>
			</tr>
			</thead><tbody>
			<tr><td>Brijesh S</td><td>4gh15cs017</td><td>Android</td><td>2018-03-21</td><td>About Login page to the 3rd and second year students.</td><td>20</td><td>Good but some more topics should be covered.its understandable.</td></tr><tr><td>Ruchika B N</td><td>4gh15cs047</td><td>HTML and CSS</td><td>2018-03-15</td><td>She used to take Sessions to the first year students.They are new to our 2017 Batch </td><td>20</td><td>Well Good and topic are more interesting.</td></tr><tr><td>Bharath G R</td><td>4gh16cs006</td><td>Python</td><td>2018-08-16</td><td>Basic of python</td><td>35</td><td>Fast and good
Projector was needed</td></tr><tr><td>Sanjay H , Bharath G.R</td><td>4gh16cs048,4gh16cs006</td><td>Phython continuation</td><td>2018-08-23</td><td>Making them aware of what is and why to use python other than other languages..(,c,c++)...
Using built in  functions used...and many more..
</td><td>24</td><td>Good</td></tr><tr><td>Sanjay H</td><td>4gh16cs048</td><td>Phython</td><td>2018-08-30</td>
  <td>How to display system time using python code
How to implementation of for nd while loop
Basically implemented all the meta topics using code nd 2 extra things Nd task assigned to the users are swapping two numbers Nd computing sum of n numbers using python
Meaning of import key word and how to implement (modules)
We have asked users to refer python documentation 3.0 for further informations in phython (frame works)</td><td>36</td><td>Sanjay bro you are rocking</td></tr><tr><td>Sanjay H</td><td>4gh16cs048</td><td>Career future</td><td>2018-09-06</td><td>Career future</td><td>16</td><td>Good</td></tr><tr><td>Sujan R</td><td>4gh16cs056</td><td>Database</td>
  <td>2018-09-20</td><td>Create,insert, update, delete,drop,alter</td><td>30</td><td>Session was interactive and good..</td></tr><tr><td>Sujan R</td><td>4gh16cs056</td><td>php</td><td>2018-10-04</td><td>php installation configuration using</td><td>24</td><td>Session was good and interesting</td></tr><tr><td>Sanjay H , Sujan R</td>
    <td>4gh16cs048, 4gh16cs056</td>
    <td>php , servers</td><td>2018-10-11</td><td>Basically how servers works (monoliths to monoservices)</td><td>25</td><td>Session was interactive and good</td></tr><tr><td>Sanjay H</td><td>4gh16cs048</td><td>JavaScript</td><td>2019-02-07</td><td>Creating a simple web pages,and about JavaScript</td><td>24</td><td>It was interesting and interactive</td></tr><tr>
      <td>Sanjay H</td><td>4gh16cs048</td><td>JavaScript</td><td>2019-02-07</td><td>Creating a simple web pages,and about JavaScript</td><td>24</td><td>It was intresing and interactive</td></tr><tr><td>Spandana I</td><td>4gh16cs056</td><td>Inkscape</td><td>2019-02-28</td><td>Basics of inkscape</td><td>24</td>
        <td>Session was interactive and good</td></tr><tr><td>Bharath g r</td><td>4gh16cs006</td><td>Web development and tools</td><td>2019-02-21</td><td>About web development and debugging</td><td>29</td><td>Good</td></tr></tbody></table>


	</div>
</div>
</body></html>
