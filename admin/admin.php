
<?php
// session_start();
include '../config.php';
include 'error.php';
// include '../alogin.php';
// echo "$sc";
 include '../session.php';
 $club=$_SESSION['club'];
 // echo "$club";
// if(isset($_SESSION['club'])){
// header("location:../alogin.php"); // Redirecting To Home Page
// }
// print_r($_SESSION);
// include '../session.php';
// include 'main.php';
// include '../global.php';
// include 'aside.php';
include 'nav.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/main.css">
    <title>ADMIN</title>
  </head>
  <body>
    <br><br><br><br><br>
  <div class="container" style="padding-top: 120px;">
    <h2 class="well well-sm" style="background-color:#000000;border-radius: 20px; animation-duration: 3s;text-shadow:1px 1px 0 #444; color: #fff;text-align:center;"><b>Members </b></h2><br>
    </div>
    <div class="container"  style="border:solid thin black;border-radius: 20px;">
      <table class="table table-striped">
          <thead>
              <tr class="" style=" color:#000000;font-size:20px;">
                  <th ><b>Name</b></th>
                  <th ><b>USN</b></th>
                  <th ><b>Semester</b></th>
                  <th ><b>Branch</b></th>
                  <th ><b>Gender</b></th>
                  <th ><b>Email</b></th>
                  <th ><b>Number</b></th>
              </tr>
              </thead><tbody>

                <?php
                // $club=strtoupper($_GET['club']);
                // $user_check=$_GET['user'];
                // $passc=$_GET['pass'];
                    $sql = "SELECT * FROM members WHERE c_name='$club'";
                    if($res = mysqli_query($conn, $sql)){
                      while($row = mysqli_fetch_array($res)){
                        echo "<tr> <td>";
                        echo  $row['name'];
                        echo "</td> <td>";
                        echo $row['usn'];
                        echo "</td> <td>";
                        echo $row['sem'] ;
                        echo "</td> <td>";
                        echo $row['branch'];
                        echo "</td> <td>";
                        echo $row['gender'] ;
                        echo "</td> <td>";
                        echo $row['email'];
                        echo "</td> <td>";
                        echo $row['number'] ;
                        echo "</td></tr>";
                      }
                      mysqli_free_result($res);
                    }

                        ?>
                      </tbody></table>
                      <form class="edit" action="edit.php" method="post">
                        <div >
                          <input type="submit" name="edit" value="Edit/Delete">
                          <input type="hidden" name="cluba" value="<?php echo $club; ?>">
                        </div>
                      </form>


                    </div>

      <!-- <button type="submit" name="edit" onclick="edit()">Edit </button> -->
  </body>
</html>
