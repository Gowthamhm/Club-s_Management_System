<?php
include 'config.php';
include 'nav.php';
// include 'main.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MEATING</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link href="css/menu.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="admin/css/main.css">
    <link rel="stylesheet" href="css/layout.css">
    <!-- <link rel="stylesheet" href="css/filp.css">  -->
   </head>
  <body>
    <div class="container" style="padding-top: 120px;">
      <h2 class="well well-sm" style="background-color:#000000;border-radius: 20px; animation-duration: 3s;text-shadow:1px 1px 0 #444; color: #fff;text-align:center;"><b>Meeting</b></h2><br>
      </div>
      <form class="sort" style="align:center;" method="post">
        Enter The Club Name To Sort
        <input type="text" name="club" value="">
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
                  <th ><b>CLUB</b></th>
                    <th ><b>Date</b></th>
                    <th ><b>Time</b></th>
                    <th ><b>Location</b></th>
                </tr>
                </thead><tbody>

                  <?php
                  if (isset($_POST['sort'])) {
                    $club=strtoupper($_POST['club']);
                    $sql = "CALL meat_dis('$club')";
                    if($res1 = mysqli_query($conn, $sql)){
                      while($row = mysqli_fetch_array($res1)){
                        $original_date = $row['date'];
                        $timestamp = strtotime($original_date);
                        $date = date("d-m-Y", $timestamp);
                        echo "<form>";
                        echo "<tr><td>";
                        echo  $row['c_name'];
                        echo "</td><td>";
                        echo $date;
                        echo "</td><td>";
                        echo $row['time'] ;
                        echo "</td><td>";
                        echo $row['location'];
                        echo "</td></tr>";
                        echo "</form>";
                      }
                      mysqli_free_result($res1);
                    }
                  }
                  else {
                    $sql = "SELECT * FROM meeting";
                    if($res = mysqli_query($conn, $sql)){
                      while($row2 = mysqli_fetch_array($res)){
                        $original_date = $row2['date'];
                        $timestamp = strtotime($original_date);
                        $date = date("d-m-Y", $timestamp);
                        echo "<form>";
                        echo "<tr><td>";
                        echo  $row2['c_name'];
                        echo "</td><td>";

                        echo $date;
                        echo "</td><td>";
                        echo $row2['time'] ;
                        echo "</td><td>";
                        echo $row2['location'];
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
