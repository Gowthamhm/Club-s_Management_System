<?php
//include database configuration file
include '../config.php';
include '../session.php';
$event=$_SESSION['event'];
$club=$_SESSION['club'];
// echo "$event";
// echo "$club";
//get records from database
$query = $conn->query("SELECT * FROM event_reg where event_name='$event' and c_name='$club'");

if($query->num_rows > 0){
    $delimxditer = ",";
    $filename = "$_SESSION[event]" . date('Y-m-d') . ".csv";

    //create a file pointer
    $f = fopen('php://memory', 'w');

    //set column headers
    $fields = array('event_name', 'Name','USN', 'Gender','Branch','Semester','Email', 'Phone');
    fputcsv($f, $fields, $delimiter);

    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){
        // $status = ($row['status'] == '1')?'Active':'Inactive';
        $lineData = array($row['event_name'], $row['name'], $row['usn'], $row['gender'], $row['branch'], $row['sem'], $row['email'], $row['phone']);
        fputcsv($f, $lineData, $delimiter);
    }

    //move back to beginning of file
    fseek($f, 0);

    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');

    //output all remaining data on a file pointer
    fpassthru($f);
    // echo "<script type=text/javascript>
    // window.location.href = 'admin.php';
    // </script>";
}
exit;

?>
