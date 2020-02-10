<?php
include '../config.php';
include '../session.php';
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
include 'error.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';
if (isset($_POST['submitm'])) {
if (!empty($_POST['club'])&&!empty($_POST['date'])&&!empty($_POST['time'])&&!empty($_POST['loc'])) {
 $club = strtoupper($_POST['club']);
$date=$_POST['date'];
$time=$_POST['time'];
$loc=$_POST['loc'];
$met = "INSERT INTO meeting(c_name,date,time,location)
VALUES ('$club','$date','$time','$loc')";
if ($conn->query($met)==TRUE) {
        // header('location:meat.php');
      echo "<script>alert('Meeting called Successfully');</script>";
$sm="SELECT email from members where c_name='$club'";
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
    $mail->Subject = 'Meating Call';
    $mail->Body    = 'Hereby You are informed to attend the Metting
         On-so and so <br>
        ON Date:'.$date.' <br>
         Time:'.$time.' <br>
         Location:'.$loc.'<br>

         Thanks <br>

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
}
else {
  echo "<script>alert('Please enter a vaild Club name');</script>";
}
}
else {
  echo "<script>alert('Fields can`t be empty');</script>";
}
?><script type="text/javascript">
window.location.href = 'admin.php';
</script><?php
}
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="../css/main.css" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
     <title>Meeting Commencement</title>
 </head>
 <body>
     <div class="container">
         <div class="signup-box">
             <div class="title">
             Meeting Commencement
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
 									<label for="date">Date</label>
 									<input type="date" name="date" value="">
 							</div>
 						</div>
                 <div class="col">
                   <div class="textboxtop"> <br>
                     <label for="time">Time</label>
                     <input type="time" name="time" value="">
                      <br>
                   </div>
                 </div>
                 <div class="col">
                   <div class="textboxtop"> <br>
                     <label for="loc">Location</label>
                     <input type="text" name="loc" value="">
                      <br>
                   </div>
                 </div>
                 <div class="button" align="center">
                    <input type="submit" name="submitm" value="Submit">
                 </div>
               </div>
             </form></div>
      </div>
   </body>
 </html>
