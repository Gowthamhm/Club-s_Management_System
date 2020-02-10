<?php
include '../config.php';
include '../session.php';
include 'error.php';
// include 'main.php';
$club=$_SESSION['club'];
include 'nav.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Event Registration Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link href="css/menu.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="../css/layout.css">
    <!-- <link rel="stylesheet" href="css/filp.css">  -->
   </head>
  <body>
    <div class="container" style="padding-top: 200px;">
      <h2 class="well well-sm" style="background-color:#000000;border-radius: 20px; animation-duration: 3s;text-shadow:1px 1px 0 #444; color: #fff;text-align:center;"><b>Event Registration Details</b></h2><br>
      </div>
      <!-- <br><br><br><br><br> -->
      <form class="sort1" style="align:center;">
        Enter The Event Name To Sort
        <input type="text" name="event" value="">
        <input type="submit" name="sort" value="Click here to Sort">
      </form>
      <br>
      <br><br><br><br>
      <div class="container" style="border:solid thin black;border-radius: 20px;">
      <div style="animation-duration: 3s;" class="w3-animate-zoom">
        <div class="table-responsive w3-animate-zoom">
        <table class="table table-striped">
            <thead>
                <tr class="" style=" font-size: 30px">
                  <th ><b>Event Name</b></th>
                    <th ><b>Name</b></th>
                    <th ><b>USN</b></th>
                    <th ><b>Gender</b></th>
                    <th ><b>Branch</b></th>
                    <th ><b>Sem</b></th>
                    <th ><b>Email</b></th>
                    <th ><b>Phone</b></th>
                </tr>
                </thead><tbody>


                  <?php
                  if (isset($_GET['sort'])) {
                    $event=$_GET['event'];
                    // echo "$event $club";
                    $query = $conn->query("SELECT * FROM event_reg where event_name='$event' and c_name='$club'");
                    $_SESSION['event']=$event;
// echo "$_SESSION[event]";
                      if($query->num_rows>0){
                          while($row = $query->fetch_assoc()){
                            echo "<form>";
                            echo "<tr><td>";
                            echo  $row['event_name'];
                            echo "</td><td>";
                            echo $row['name'];
                            echo "</td><td>";
                            echo $row['usn'] ;
                            echo "</td><td>";
                            echo $row['gender'];
                            echo "</td><td>";
                            echo $row['branch'];
                            echo "</td><td>";
                            echo $row['sem'];
                            echo "</td><td>";
                            echo $row['email'];
                            echo "</td><td>";
                            echo $row['phone'];
                            echo "</td></tr>";
                            echo "</form>";
                            // $status = ($row['status'] == '1')?'Active':'Inacticlass=btn btn-success
                          }
                          echo "<form method=post class=export>";
                          echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit name=export style=height=60px; value=Export&nbsp;&nbsp;To&nbsp;&nbsp;CSV>";
                          echo "</form>";
                          if(isset($_POST["export"])){
                            echo "<script type=text/javascript>
                               window.location.href = 'export.php';
                             </script>";
                  }

                }
                // exit;
                echo "<div class=partd>";
                $part="SELECT part_no from event_detail WHERE event_name='$event'";
                if ($pno=mysqli_query($conn,$part)) {
                  while ($pnoa=mysqli_fetch_array($pno)) {
                    echo "  <b>Total Number Of Participents Are ";
                    echo $pnoa['part_no'];
                    echo "</b>";
                  }
                }
                echo "</div>";
              }
                  else {
                    $sql = "SELECT *from event_reg where c_name='$club'";
                    // echo "$club";
                    if($res = mysqli_query($conn, $sql)){
                      // echo "hai";
                      while($row2 = mysqli_fetch_array($res)){
                        // $original_date = $row2['date'];
                        // $timestamp = strtotime($original_date);
                        // $date = date("d-m-Y", $timestamp);
                        echo "<form>";
                        echo "<tr><td>";
                        echo  $row2['event_name'];
                        echo "</td><td>";
                        echo $row2['name'];
                        echo "</td><td>";
                        echo $row2['usn'] ;
                        echo "</td><td>";
                        echo $row2['gender'];
                        echo "</td><td>";
                        echo $row2['branch'];
                        echo "</td><td>";
                        echo $row2['sem'];
                        echo "</td><td>";
                        echo $row2['email'];
                        echo "</td><td>";
                        echo $row2['phone'];
                        echo "</td></tr>";
                        echo "</form>";
                      }
                      mysqli_free_result($res);
                    }
                  }
                          ?>
                        </tbody> </table>
                      </div>
                      </div>

                      </div>


  </body>
</html>
