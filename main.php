<?php
include 'config.php';
include 'error.php';
if(isset($_POST["submitl"])){
if(!empty($_POST['user']) && !empty($_POST['pass'])&& !empty($_POST['club'])) {
    $user= $_POST['user'];
    $pass=$_POST['pass'];
   $club = strtoupper($_POST['club']);
   include 'global.php';
   $club1=$club;
    $query=mysqli_query($conn,"SELECT * FROM admin WHERE u_name='".$user."' AND password='".$pass."'AND c_name='".$club1."'");
    $numrows=mysqli_num_rows($query);
    if($numrows!=0)
    {
    while($row1=mysqli_fetch_array($query))
    {
      $dbclub=$row1['c_name'];
    $dbusername=$row1['u_name'];
    $dbpassword=$row1['password'];
    }

    if($user == $dbusername && $pass == $dbpassword && $club1 == $dbclub)
    {
    header("location:admin/admin.php");
    }
    } else {
    echo "<script>alert('Invalid username or password or club !')</script>";
    }

} else {
    echo "All fields are required!";
}
}

if(isset($_POST['submitr']))
{
    $sql2 = "INSERT INTO members(c_name,name,usn,sem,branch,gender,email,number)
    VALUES ('$_POST[club]','$_POST[name]','$_POST[usn]','$_POST[sem]','$_POST[branch]','$_POST[gender]','$_POST[email]','$_POST[number]')";
    if ($conn->query($sql2) === TRUE) {
      echo "<script>alert('Registered Successfully');</script>";
      header('location: sucr.php');
    }
    else {
      echo "<script>alert('Registered Unsuccessfully');</script>";
    }
}
 ?>
