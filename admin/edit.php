<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
        <link rel="stylesheet" href="../css/main.css" type="text/css">
  </head>
  <body>
    <br><br><br><br>
<div class="edit">
  <form class="">
    Enter the USN want to Edit/Modify or Delete
    <input type="hidden" name="cluba" value="<?php echo $_SESSION['club'] ?>">
    <input type="text" name="usnd" value="">
    <input type="submit" name="editm" value="Edit"> &nbsp;&nbsp;&nbsp;
    <input type="submit" name="delete" value="Delete">&nbsp;&nbsp;&nbsp;
      <input type="submit" name="back" value="Back">
  </form>
</div>
<br><br><br><br>
</body>
</html>
<?php
include '../config.php';
include 'error.php';
include '../session.php';

// echo "done";
$clubm=$_SESSION['club'];
if (isset($_GET['editm'])) {
  // echo "done";
  $usnd=$_GET['usnd'];
  $al="SELECT * FROM members where usn='$usnd' AND c_name='$clubm'";
  // $res = mysqli_query($conn, $al);
  if($res=mysqli_query($conn, $al)) {
    if($row = mysqli_fetch_array($res)){
      // echo "done";
      $clubm=$row['c_name'];
      $namem=$row['name'];
      $usnm=$row['usn'];
      $semm=$row['sem'];
      $branchm=$row['branch'];
      $genderm=$row['gender'];
      $emailm=$row['email'];
      $numberm=$row['number'];
        // $privilagesm=$row['privilages'];
      // echo "$clubm";
      echo "  <div class=container>
            <div class=signup-box1>";
      echo "  <div class=title>
        Modification
      </div> ";
      echo "  <div class=row>";
      echo "<tr> <form method=\"post\"> ";
      // echo "<td> <input type=text name=\"cname\" value='".$row['c_name'].">";
      echo "	<div class=col>
          <div class=textboxtop><br>
        CLUB
            ";
      echo "<td> <input type=text name=\"cname\" value='".$row['c_name']."'></td>";
      echo "  </div>
      </div>";
      echo "	<div class=col>
          <div class=textboxtop><br>
            <label for=club>Name</label>
            ";
      echo "<td> <input type=text name=\"name\" value='".$row['name']."'></td>";

      echo "  </div>
      </div>";
      echo "	<div class=col>
          <div class=textboxtop><br>
            <label for=club>USN</label>
            ";
      echo "<td> <input type=text name=\"usn\" value='".$row['usn']."'></td>";
      echo "  </div>
      </div>";
      echo "<td> <input type=hidden name=\"id\" value='".$row['usn']."'></td>";
      echo "	<div class=col>
          <div class=textboxtop><br>
            <label for=club>Semester</label>
            ";
      echo "<td> <input type=text name=\"sem\" value='".$row['sem']."'></td>";
      echo "  </div>
      </div>";
      echo "	<div class=col>
          <div class=textboxtop><br>
            <label for=club>Branch</label>
            ";
      echo "<td> <input type=text name=\"branch\" value='".$row['branch']."'></td>";
      echo "  </div>
      </div>";
      echo "	<div class=col>
          <div class=textboxtop><br>
            <label for=club>Gender</label>
            ";
      echo "<td> <input type=text name=\"gender\" value='".$row['gender']."'></td>";
      echo "  </div>
      </div>";
      echo "	<div class=col>
          <div class=textboxtop><br>
            <label for=club>Email</label>
            ";
      echo "<td> <input type=text name=\"email\" value='".$row['email']."'></td>";
      echo "  </div>
      </div>";
      echo "	<div class=col>
          <div class=textboxtop><br>
            <label for=club>Number</label>
            ";
      echo "<td> <input type=text name=\"number\" value='".$row['number']."'></td>";
      echo "  </div>
      </div>";
      // echo "	<div class=col>
      //     <div class=textboxtop><br>
      //       <label for=club>Privilages</label>
      //       ";
      // echo "<td> <input type=text name=\"privilages\" value='".$row['privilages']."'></td>";
      // echo "  </div>
      // </div>";
      echo "<div class=button align=center>";
      echo "<td> <input type=submit name=\"modify\" value=Modify ></td>";
      echo "
      </div>";
      // echo "<td> <input type=submit name=\"delete\"  value=Delete></td>";
      echo "</div>";
      echo "</form></tr>";
      echo "</div></div>";
      // echo "done";
      if (isset($_POST['modify'])) {
        $id=$_POST['id'];
        $cname=$_POST['cname'];
        $name=$_POST['name'];
        $usn=$_POST['usn'];
        $sem=$_POST['sem'];
        $branch=$_POST['branch'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $number=$_POST['number'];
          // $privilages=$row['privilages'];
        $mo="UPDATE members SET c_name='$cname',name='$name',usn='$usn',sem='$sem',branch='$branch',gender='$gender',gender='$gender',email='$email',number='$number' WHERE usn='$id' and c_name='$_SESSION[club]'";
        $resm = mysqli_query($conn, $mo);
        if($resm){
           echo "<script>alert('updated !')</script>";
           // header("Location:admin.php");
           ?>
           <script type="text/javascript">
             window.location.href = "admin.php";
           </script>
           <?php
        }
        else {
               echo "<script>alert('not updated !')</script>";
        }
      }
    }
    else {
  echo "<script>alert('not belong to your club !')</script>";
    }
       }
     }
     if (isset($_GET['delete'])) {
         $usnd=$_GET['usnd'];
         $de="DELETE FROM members where usn='$usnd'";
         // echo "done";
         $resd=mysqli_query($conn,$de);
         if($resd){

            echo "<script>alert('Deleted !')</script>";
         }
         else {
            echo "<script>alert('not deleted !')</script>";
         }
     }
     if (isset($_GET['back'])) {
        ?> <script type="text/javascript">
           window.location.href = "admin.php";
         </script><?php
     }

?>
