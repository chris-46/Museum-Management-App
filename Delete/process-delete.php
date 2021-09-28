<!DOCTYPE html> 

<head>
  <link rel="stylesheet" href="process-delete.css">
</head>


<div class="header">
  <b style="family:verdana" >Delete Data</b>
</div>


<style>
  body {
    background-image: url('../background.jpg');
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }
</style>

<div class="boxone">
<?php
    include '../connect.php';
    $Locker_Number = $_POST['Locker_Number'];
    $Staff_ID = $_POST['Staff_ID'];
    $Ticket_Number = $_POST['Ticket_Number'];
    $Artifact_Name = $_POST['Artifact_Name'];
    $Visitor_PhoneNumber = $_POST['Visitor_PhoneNumber'];
    $Visitor_Name = $_POST['Visitor_Name'];
    $conn = OpenCon();


    if ($_POST['action'] == 'Delete Locker') {
        $sql = "delete from Locker where Locker_Number = '$Locker_Number'";
    } 

    if ($_POST['action'] == 'Delete Staff') {
        $sql = "delete from Staff where Staff_ID = '$Staff_ID'";
    } 

    if ($_POST['action'] == 'Delete Ticket') {
        $sql = "delete from Ticket_Purchases_AssignedTo1 where Ticket_Number = '$Ticket_Number'";
    } 

    if ($_POST['action'] == 'Delete Artifact') {
        $sql = "delete from Artifact_Presents1 where Artifact_Name = '$Artifact_Name'";
    } 

    if ($_POST['action'] == 'Delete Visitor') {
        $sql = "delete from Visitor where Visitor_Name = '$Visitor_Name' and Visitor_PhoneNumber = '$Visitor_PhoneNumber'";
    } 
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
            }
?>
</div>
</html>