<!DOCTYPE html> 

<head>
  <link rel="stylesheet" href="process-update.css">
</head>


<div class="header">
  <b style="family:verdana" >Update Data</b>
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
    $Roomid = $_POST['Roomid'];
    $GSGid = $_POST['GSGid'];
    $TPAT2id = $_POST['TPAT2id'];
    $APid = $_POST['APid'];
    $EHid = $_POST['EHid'];
    $S2id = $_POST['S2id'];
    
    $conn = OpenCon();


    if ($_POST['action'] == 'Submit Room Capacity') {
        $Capacity = $_POST['RoomCapacity'];
        $sql = "update Room set Room_Capacity = '$Capacity' where Room_Name = '$Roomid'";
    } 
    if ($_POST['action'] == 'Submit Room Theme') {
        $Theme = $_POST['RoomTheme'];
        $sql = "update Room set Room_Theme = '$Theme' where Room_Name = '$Roomid'";
    }
    
    if ($_POST['action'] == 'Submit Group Size') {
        $Size = $_POST['GroupSize'];
        $sql = "update Group_StartsIn_Guides set Group_Size = '$Size' where Group_Number = '$GSGid'";
    }
    if ($_POST['action'] == 'Submit Group Max Size') {
        $Size = $_POST['GroupMaxSize'];
        $sql = "update Group_StartsIn_Guides set Group_MaximumSize = '$Size' where Group_Number = '$GSGid'";
    }
    if ($_POST['action'] == 'Submit Group Start Time') {
        $Time = $_POST['StartTime'];
        $sql = "update Group_StartsIn_Guides set StartsIn_Time = '$Time' where Group_Number = '$GSGid'";
    }



    if ($_POST['action'] == 'Submit Ticket Type') {
        $Type = $_POST['TicketType'];
        $sql = "update Ticket_Purchases_AssignedTo2 set Ticket_Type = '$Type' where Ticket_Number = '$TPAT2id'";
    }
    if ($_POST['action'] == 'Submit Ticket Date') {
        $Date = $_POST['TicketDate'];
        $sql = "update Ticket_Purchases_AssignedTo2 set Ticket_Date = '$Date' where Ticket_Number = '$TPAT2id'";
    }
    if ($_POST['action'] == 'Submit Ticket Time') {
        $Time = $_POST['TicketTime'];
        $sql = "update Ticket_Purchases_AssignedTo2 set Ticket_Time = '$Time' where Ticket_Number = '$TPAT2id'";
    }



    if ($_POST['action'] == 'Submit Artifact Era') {
        $Era = $_POST['ArtifactEra'];
        $sql = "update Artifact_Presents1 set Artifact_Era = '$Era' where Artifact_Name = '$APid'";
    }
    if ($_POST['action'] == 'Submit Artifact Origin') {
        $Origin = $_POST['ArtifactOrigin'];
        $sql = "update Artifact_Presents1 set Artifact_Origin = '$Origin' where Artifact_Name = '$APid'";
    }

    if ($_POST['action'] == 'Submit Exhibit Last Service Date') {
        $Origin = $_POST['ExhibitLastServiceDate'];
        $sql = "update Exhibit_Has set Exhibit_LastServiceDate = '$Origin' where Exhibit_Name = '$EHid'";
    }
    if ($_POST['action'] == 'Submit Exhibit Topic') {
        $Origin = $_POST['ExhibitTopic'];
        $sql = "update Exhibit_Has set Exhibit_Topic = '$Origin' where Exhibit_Name = '$EHid'";
    }


    if ($_POST['action'] == 'Submit Security Ranking') {
        $Origin = $_POST['SecurityRanking'];
        $sql = "update Security2 set Security_ranking = '$Origin' where Staff_ID = '$S2id'";
    }


    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
            }
?>
</div>
</html>