<?php
include 'config.php';
include 'nav.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Activites</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link href="css/menu.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="admin/css/main.css">
    <link rel="stylesheet" href="css/layout.css">
    <!-- <link rel="stylesheet" href="css/filp.css">  -->
   </head>
  <body>
    <div class="container" style="padding-top: 120px;">
      <h2 class="well well-sm" style="background-color:#000000;border-radius: 20px; animation-duration: 3s;text-shadow:1px 1px 0 #444; color: #fff;text-align:center;">
        <b>Event/Activites</b></h2><br>
      </div>
      <form class="sort" style="align:center;" method="post">
        Enter The Club Name To Sort
        <input type="text" name="club" value="">
        <input type="submit"style="border-radius: 9px;" name="sort" value="Click here to Sort">
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
                    <th ><b>Event Name</b></th>
                    <th ><b>Time</b></th>
                    <th ><b>Date</b></th>
                    <th ><b>Location</b></th>
                    <th ><b>Description</b></th>
                    <th ><b>Contactable Persons</b></th>
                      <th ><b>Contactable Number</b></th>
                </tr>
                </thead><tbody>

                  <?php
                  if (isset($_POST['sort'])) {
                    $club=strtoupper($_POST['club']);
                    // $sql = "SELECT * from event e,event_detail ed where e.c_name='$club' &&  e.event_name=ed.event_name";
                    $sql="call sort_event('$club')";
                    if($res1 = mysqli_query($conn, $sql)){
                      while($row = mysqli_fetch_array($res1)){
                        $original_date = $row['date'];
                        $timestamp = strtotime($original_date);
                        $date = date("d-m-Y", $timestamp);
                        echo "<form>";
                        echo "<tr><td>";
                        echo  $row['c_name'];
                        echo "</td><td>";
                        echo $row['event_name'] ;
                        echo "</td><td>";
                        echo $row['time'];
                        echo "</td><td>";
                        echo $date;
                        echo "</td><td>";
                        echo $row['location'];
                        echo "</td><td>";
                        echo $row['description'];
                        echo "</td><td>";
                        echo $row['contact'];
                        echo "</td><td>";
                        echo $row['number'];
                        echo "</td></tr>";
                        echo "</form>";
                      }
                      mysqli_free_result($res1);
                    }
                  }
                  else {
                    $sql = "SELECT c_name,ed.event_name,time,date,location,description,contact,number FROM event_detail ed LEFT JOIN event e on ed.event_name=e.event_name";
                    if($res = mysqli_query($conn, $sql)){
                      while($row2 = mysqli_fetch_array($res)){
                        $clubd=$row2['c_name'];
                        echo "<form>";
                        echo "<tr><td>";
                        echo  $clubd;
                        echo "</td><td>";
                        echo  $row2['event_name'];
                        echo "</td><td>";
                        echo $row2['time'] ;
                        echo "</td><td>";
                        $date=$row2['date'];
                        $original_date = $date;
                        $timestamp = strtotime($original_date);
                        $new_date = date("d-m-Y", $timestamp);
                        echo $new_date;
                        echo "</td><td>";
                        echo $row2['location'];
                        echo "</td> <td>";
                        echo $row2['description'] ;
                        echo "</td> <td>";
                        echo $row2['contact'];
                        echo "</td> <td>";
                        echo $row2['number'] ;
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
