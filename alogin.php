<?php
session_start();
include 'config.php';
include 'error.php';
if(isset($_POST["submitl"])){
if(!empty($_POST['user']) && !empty($_POST['pass'])&& !empty($_POST['club'])) {
    $user= $_POST['user'];
    $pass=$_POST['pass'];
   $club = strtoupper($_POST['club']);
    $query=mysqli_query($conn,"SELECT * FROM admin WHERE u_name='".$user."' AND password='".$pass."'AND c_name='".$club."'");
    $numrows=mysqli_num_rows($query);
    if($numrows!=0)
    {
    while($row1=mysqli_fetch_array($query))
    {
    $dbusername=$row1['u_name'];
    $dbpassword=$row1['password'];
    $dbclub=$row1['c_name'];
    }
  if($user == $dbusername && $pass == $dbpassword && $club == $dbclub)
    {
      $_SESSION['club']=$club;
      $_SESSION['user']=$user;
    header("location:admin/admin.php");
    }
    } else {
    echo "<script>alert('Invalid username or password or club !')</script>";
    }

} else {
    echo "<script>alert('All fields are required!')</script>";

}
}
if (isset($_POST['back'])) {
header("Location:home.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="signup-box">
            <div class="title">
                LOGIN
            </div>
            <form method="post">
              <div class="row">
                  <br>
                  <br>
                  <div class="col">
                      <div class="textboxtop">
                         <input type="text" placeholder="Username" name="user">
                      </div>
                  </div>
              </div>
              <div class="textbox">
                 <input type="password" name="pass" placeholder="Password">
             </div>
             <div class="textbox">
               <input type="text" name="club" placeholder="Club Name">

             </div>
              <div class="button" align="center">
                 <input type="submit" name="submitl" value=LOGIN>
                 <p>Don't have an account? <a href="registration.php">Sign up now</a>.</p>
              </div>
              <div   class="button1"  align="center">
                 <input type="submit" name="back" value=BACK>
              </div>
            </form>
          </div>
     </div>
  </body>
</html>
<?php $conn->close();?>
