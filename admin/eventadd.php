<?php
include '../config.php';
// session_start();
include '../session.php';
include '../config_aqg.php';
include 'error.php';
include '../main.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';
if (isset($_POST['submite'])) {
if (!empty($_POST['club']) && !empty($_POST['ename']) && !empty($_POST['ename']) && !empty($_POST['desc']) && !empty($_POST['loc']) && !empty($_POST['date']) && !empty($_POST['time'])
 && !empty($_POST['contact']) && !empty($_POST['number'])){
$club = strtoupper($_POST['club']);
// echo "$club";
$ename=$_POST['ename'];
// $ename1=$_POST['ename'];
$desc=$_POST['desc'];
$loc=$_POST['loc'];
$date=$_POST['date'];
// $datem=date("y-m-d",$date);
// echo "$datem";
$time=$_POST['time'];
// echo "$time";
$cont=$_POST['contact'];
$number=$_POST['number'];
  $eva = "INSERT INTO event(c_name,event_name)VALUES ('$club','$ename')";
    $eveaqg = "INSERT INTO event(c_name,event_name)VALUES ('$club','$ename')";
    if(mysqli_query($connaqg,$eveaqg)){
      echo "<script>alert(inserted to aqg event table);</script>";
    }
    if (mysqli_query($conn,$eva)) {
      $evad="INSERT INTO event_detail(event_name,date,time,location,description,contact,number)
      VALUES ('$ename','$date','$time','$loc',\"$desc\",'$cont','$number')";
      if (mysqli_query($conn,$evad)) {
        echo"<script>alert('Event Created Successfully')</script>";
        $sm="SELECT email from members";
        if ($rm=mysqli_query($conn,$sm)) {
        while ($rsm=mysqli_fetch_array($rm)) {
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'lionmonkey001@gmail.com';                     // SMTP username
            $mail->Password   = '9538304149';
            // $mail->Username   = 'gowthamhm001@gmail.com';                     // SMTP username
            // $mail->Password   = 'Gowthamhm001@';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
            $mail->Port       = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('lionmonkey001@gmail.com',$club);
            $mail->addAddress($rsm['email'] );     // Add a recipient
            // $mail->addAddress('gowthamhm001@gmail.com');               // Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            // Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Ad$_SESSION[club]d attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Event ';
            $mail->Body    = ''.$ename.' as been organizing by the '.$club.' <br>
                  Details as Follows <br>
                  Club:'.$club.' <br>
                  Event Name:'.$ename.'<br>
                  Description:'.$desc.'<br>
                 Date:'.$date.'<br>
                 Time:'.$time.'<br>
                 Location:'.$loc.'<br>
             Members Inchage:'.$cont.'<br>
                Coordinator Contact Number:'.$number.'<br>
  <br>
                 Thanks,
  <br>
               Regards,<br>
               Admin,
               '.$club.'
                ';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

          $send= $mail->send();
          if($send){
            // echo 'Message has been sent';
                  echo "<script>alert('Message has been sent');</script>";
          }
          else {
                    echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
          }
        } catch (Exception $e) {
            // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
        }
        }
        }
        // header("location:act.php");
        echo "<script type='text/javascript'>
        window.location.href = 'admin.php';
        </script>";
      }
    }


  else {
    echo"<script>alert('eneter a valid filed')</script>";
  }
}
else {
    echo"<script>alert('All the fields are required')</script>";
}
}


// if(isset($_POST['submitr']))
// {
//   if ($_POST['pass']==$_POST['cpass']) {
//     $sql2 = "INSERT INTO members(c_name,name,usn,sem,branch,gender,email,number,password)
//     VALUES ('$_POST[club]','$_POST[name]','$_POST[usn]','$_POST[sem]','$_POST[branch]','$_POST[gender]','$_POST[email]','$_POST[number]','$_POST[pass]')";
//     if ($conn->query($sql2) === TRUE) {
//       echo "<script>alert('Registered Successfully');</script>";
//       header('location: sucr.php');
//     }
//     else {
//       echo "<script>alert('Registered Unsuccessfully');</script>";
//       header('location: registration.php');
//     }
//   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>EVENT CREATION</title>
</head>
<body>
    <div class="container">
        <div class="signup-box">
            <div class="title">
            EVENT CREATION
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
                              // if ($ress=mysqli_query($conn,$sele)) {
                              // $sele="SELECT * FROM club";
                                // while ($rows=mysqli_fetch_array($ress)) {
                                  // $clubs=$rows['c_name'];
                                  echo "<option value='#$_SESSION[club]'>$_SESSION[club]</option>";
                                // }
                              // }
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
                    <label for="name">Event Name</label>
                    <input type="text" name="ename" value=""> <br>
                  </div>
                </div>
                <div class="col">
                  <div class="textboxtop">
                    <label for="desc">Description</label>
                    <input type="text" name="desc" value="">
                     <br>
                  </div>
                </div>
                <div class="col">
                  <div class="textboxtop">
                    <label for="loc">Location</label>
											<input type="text" name="loc" value="">

                    </div>
                </div>
                <div class="col">
                  <div class="textboxtop">
                    <label for="loc">Date</label>
											<input type="date" name="date" data-date-format="YYYY MMMM DD" value="">


                    </div>
                </div>
								<div class="col">
									<div class="textboxtop">
										<label for="time">Time</label>
										<input value="00:00:00" type="time" step="1" name="time" >
						            </div>
							</div>
              <div class="col">
                  <div class="textboxtop"> <br>
                    <label for="contact">Contactable Persons</label>
                    <input type="text" name="contact" value="">
                  </div>
                </div>
                    <div class="col">
                        <div class="textboxtop">
                     <br>
                     <label for="pno">Contactable Phone Number</label>
                     <input type="number" name="number" value="number">
                  </div>
                </div>
                <div class="button" align="center">
                   <input type="submit" name="submite" value="Submit">
                </div>
              </div>
            </form></div>
     </div>
  </body>
</html>
<?php $conn->close(); ?>
