<?php
include 'config.php';
// include 'config.php';
include 'main.php';
// include 'error.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>MEMBER`S REGISTRATION</title>
</head>
<body>
    <div class="container">
        <div class="signup-box">
            <div class="title">
            MEMBER`S REGISTRATION
          </div> <br><br>
            <form class="" action="" method="post">
              <div class="row">
								<div class="col">
                  <div class="textboxtop"><br>
                    <label for="club">CLUB</label>
                    <br><br>
                    <select class="cmd"
                            onchange="document.getElementById('displayValue').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
                            <option value="">SELECT</option>
                              <?php
                              $sele="SELECT * FROM club";
                              if ($ress=mysqli_query($conn,$sele)) {
                                while ($rows=mysqli_fetch_array($ress)) {
                                  $clubs=$rows['c_name'];
                                  echo "<option value='$clubs'>$clubs</option>";
                                }
                              }
                               ?>
                      <!-- <option value="GLUE">GLUE</option>
                      <option value="GEON">GEON</option>
                           <option value="ROTARACT">ROTARACT</option> -->
                    </select>
                    <input type="hidden" name="club" id="displayValue"
                         onfocus="this.select()"
                           style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;#width:180px;height:23px; height:21px\9;#height:18px;border:1px solid #556;"  >
                    <input name="idValue" id="idValue" type="hidden">       <br><br>              <br>
                  </div>
                </div>
                <div class="col">
                  <div class="textboxtop">
                    <label for="name">Name</label>
  <input type="text" name="name" value=""> <br>
                  </div>
                </div>
                <div class="col">
                  <div class="textboxtop">
                    <label for="usn">USN</label>
                    <input type="text" name="usn" value="">
                     <br>
                  </div>
                </div>

                <div class="col">
                  <div class="textboxtop">
                    <label for="ename">SEMESTER</label>
											<input type="text" name="sem" value="">
											<hr>
                    <!-- <select class="cmd" onchange="document.getElementById('displayValue').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
                    <option value="one">1</option>
                    <option value="two">2</option>
                    <option value="three">3</option>
                    <option value="four">4</option>
                    <option value="five">5</option>
                    <option value="six">6</option>
                    <option value="seven">7</option>
                    <option value="eight">8</option>
                    </select>
                    <input type="hidden" name="sem" id="displayValue"  onfocus="this.select()"  >
                    <input name="idValue" id="idValue" type="hidden">     <br>                <br> -->
                  </div>
                </div>
								<div class="col">
									<div class="textboxtop">
										<label for="ename">BRANCH</label>
										<input type="text" name="branch" value="">
										<!--
										<select class="cmd"  onchange="document.getElementById('displayValue').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
										<option value="cse">CS&E</option>
										<option value="mech">MECH</option>
										<option value="ec">E&C</option>
										<option value="civil">CIVIL</option>
									</select>
									<input type="hidden" name=" branch" id="displayValue"   onfocus="this.select()" >
									<input name="idValue" id="idValue" type="hidden"> -->

								</div>
							</div>
							<div class="col">
								<div class="textboxtop">
									<label for="gender">Gender</label>
									<input type="text" name="gender" value="">
									<!-- <select class="cmd"  onchange="document.getElementById('displayValue').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
									<option value="male">Male</option>
									<option value="female">Female</option>
									<option value="other">Other</option>
								</select>
								<input type="hidden" name="gender" id="displayValue"   onfocus="this.select()" >
								<input name="idValue" id="idValue" type="hidden"> -->
							</div>
						</div>
                <div class="col">
                  <div class="textboxtop"> <br>
                    <label for="ename">Email</label>
                    <input type="email" name="email" value="">
                     <br>
                  </div>
                </div>
                <div class="col">
                  <div class="textboxtop">
                    <label for="ename">Phone Number</label>
                    <input type="number" name="number" value="number">
                    <br>
                  </div>
                </div>
                <div class="button" align="center">
                   <input type="submit" name="submitr" value="Submit">
                </div>



              </div>
            </form></div>
     </div>
  </body>
</html>
