<?php
include 'config.php';
// include 'config.php';
if(isset($_POST['submit']))
{
	$re="SELECT * FROM event ";
	if ($res=mysqli_query($conn,$re)) {
while ($row=mysqli_fetch_array($res)) {
	$dbclub=$row['c_name'];
	$dbevent=$row['event_name'];
	echo "$dbclub,$dbevent";
if ($_POST['ename']==$dbevent && $_POST['club']==$dbclub) {
	$sql = "INSERT INTO event_reg(event_name,name,usn,gender,branch,sem,c_name,email,phone)
VALUES ('$_POST[ename]','$_POST[name]','$_POST[usn]','$_POST[gender]','$_POST[branch]','$_POST[sem]','$_POST[club]','$_POST[email]','$_POST[number]')";
if ($conn->query($sql) === TRUE) {
		echo "<script>alert('Registered Successfully');</script>";
		header('location: sucr.php');
	}
	else {
		echo "<script>alert('Fill the Data Correctly');</script>";
	}
}
else {
	echo "<script>alert('$_POST[club] not organizing the $_POST[ename]');</script>";
}
}
}
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="css/main.css" type="text/css"> -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>EVENT REGISTRATION</title>
</head>
<body>
    <div class="container">
        <div class="signup-box">
            <div class="title">
            EVENT REGISTRATION
          </div> <br><br>
            <form class="" action="" method="post">
              <div class="row">
                <div class="col">
                  <div class="textboxtop">
										<label for="ename">Event Name</label>
                     <input type="text" name="ename" value="">
                     <br>
                  </div>
                </div>

                <div class="col">
                  <div class="textboxtop">
										<label for="ename">Name</label>
  <input type="text" name="name" value=""> <br>
                  </div>
                </div>
                <div class="col">
                  <div class="textboxtop">
                    <label for="ename">USN</label>
                    <input type="text" name="usn" value="">
                     <br>
                  </div>
                </div>
                <label for="gender">Gender</label>
                <div class="col">
                  <div class="textboxtop">
										<input type="text" name="gender" value="">
                  </div>
                </div>
                <label for="ename">BRANCH</label>
                <div class="col">
                  <div class="textboxtop">
											<input type="text" name="branch" value="">
               </div>
                </div>
                <div class="col">
                  <div class="textboxtop">
                    <label for="ename">SEMESTER</label>
											<input type="text" name="sem" value="">
											<hr>
                  </div>
                </div>
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
                   <input type="submit" name="submit" value="Submit">
                </div>
          </div>
            </form></div>
     </div>
  </body>
</html>
<?php $conn->close(); ?>
