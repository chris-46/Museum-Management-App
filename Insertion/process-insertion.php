<!DOCTYPE html> 

<head>
  <link rel="stylesheet" href="process-insertion.css">
</head>


<div class="header">
  <b style="family:verdana" >Insert Data</b>
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

    $conn = OpenCon();

    if ($_POST['action'] == 'Insert Locker') {
        $LockerLockerNumber = $_POST['LockerLockerNumber'];
        $sql = "INSERT INTO Locker VALUES('$LockerLockerNumber')";
    } 

    if ($_POST['action'] == 'Insert Visitor') {
        $VisitorVisitorName = $_POST['VisitorVisitorName'];
        $VisitorVisitorPhoneNumber = $_POST['VisitorVisitorPhoneNumber'];
        $VisitorVisitorAge = $_POST['VisitorVisitorAge'];
        $sql = "INSERT INTO Visitor VALUES('$VisitorVisitorName', '$VisitorVisitorPhoneNumber', $VisitorVisitorAge)";
    } 

    if ($_POST['action'] == 'Insert StoresBelongings') {
        $StoresBelongingsLockerNumber = $_POST['StoresBelongingsLockerNumber'];
        $StoresBelongingsVisitorName = $_POST['StoresBelongingsVisitorName'];
        $StoresBelongingsVisitorPhoneNumber = $_POST['StoresBelongingsVisitorPhoneNumber'];
        $sql = "INSERT INTO StoresBelongings VALUES($StoresBelongingsLockerNumber, '$StoresBelongingsVisitorName', '$StoresBelongingsVisitorPhoneNumber')";
    } 

    if ($_POST['action'] == 'Insert Brings_Infant') {
        $Brings_InfantInfantName = $_POST['Brings_InfantInfantName'];
        $Brings_InfantInfantAge = $_POST['Brings_InfantInfantAge'];
        $Brings_InfantVisitorName = $_POST['Brings_InfantVisitorName'];
        $Brings_InfantVisitorPhoneNumber = $_POST['Brings_InfantVisitorPhoneNumber'];
        $sql = "INSERT INTO Brings_Infant VALUES('$Brings_InfantInfantName', $Brings_InfantInfantAge, '$Brings_InfantVisitorName', '$Brings_InfantVisitorPhoneNumber')";
    } 

    if ($_POST['action'] == 'Insert Room') {
        $RoomName = $_POST['RoomRoomName'];
        $RoomCapacity = $_POST['RoomRoomCapacity'];
        $RoomTheme = $_POST['RoomRoomTheme'];
        $sql = "INSERT INTO Room VALUES('$RoomName', $RoomCapacity, '$RoomTheme')";
    } 

    if ($_POST['action'] == 'Insert Staff') {
        $StaffID = $_POST['StaffStaffID'];
        $StaffName = $_POST['StaffStaffName'];
        $sql = "INSERT INTO Staff VALUES($StaffID, '$StaffName')";
    } 

    if ($_POST['action'] == 'Insert TourGuide') {
        $StaffID = $_POST['TourGuideStaffID'];
        $TourGuideSpecialty = $_POST['TourGuideTourGuideSpecialty'];
        $sql = "INSERT INTO TourGuide VALUES($StaffID, '$TourGuideSpecialty')";
    } 

    if ($_POST['action'] == 'Insert Security1') {
        $SecurityRanking = $_POST['Security1SecurityRanking'];
        if ($SecurityRanking >= 4) {
            $bool = TRUE;
        } else {
            $bool = FALSE;
        }
        $sql = "INSERT INTO Security1 VALUES($SecurityRanking, $bool)";      
    } 

    if ($_POST['action'] == 'Insert Security2') {
        $StaffID = $_POST['Security2StaffID'];
        $SecurityRanking = $_POST['Security2SecurityRanking'];
        $sql = "INSERT INTO Security2 VALUES($StaffID, $SecurityRanking)";
    } 

    if ($_POST['action'] == 'Insert Group_StartsIn_Guides') {
        $GroupNumber = $_POST['Group_StartsIn_GuidesGroupNumber'];
        $GroupSize = $_POST['Group_StartsIn_GuidesGroupSize'];
        $GroupMaximumSize = $_POST['Group_StartsIn_GuidesGroupMaximumSize'];
        $StartsInTime = $_POST['Group_StartsIn_GuidesStartsInTime'];
        $RoomName = $_POST['Group_StartsIn_GuidesRoomName'];
        $TourGuideID = $_POST['Group_StartsIn_GuidesTourGuideID'];
        $sql = "INSERT INTO Group_StartsIn_Guides VALUES($GroupNumber, $GroupSize, $GroupMaximumSize, '$StartsInTime', '$RoomName', $TourGuideID)";
    } 

    if ($_POST['action'] == 'Insert Ticket_Purchases_AssignedTo1') {
        $VisitorName = $_POST['Ticket_Purchases_AssignedTo1VisitorName'];
        $VisitorPhoneNumber = $_POST['Ticket_Purchases_AssignedTo1VisitorPhoneNumber'];
        $TicketNumber = $_POST['Ticket_Purchases_AssignedTo1TicketNumber'];
        $PurchasesDate = $_POST['Ticket_Purchases_AssignedTo1PurchasesDate'];
        $sql = "INSERT INTO Ticket_Purchases_AssignedTo1 VALUES('$VisitorName', '$VisitorPhoneNumber', $TicketNumber, '$PurchasesDate')";
    } 

    if ($_POST['action'] == 'Insert Ticket_Purchases_AssignedTo2') {
        $TicketNumber = $_POST['Ticket_Purchases_AssignedTo2TicketNumber'];
        $TicketType = $_POST['Ticket_Purchases_AssignedTo2TicketType'];
        $TicketDate = $_POST['Ticket_Purchases_AssignedTo2TicketDate'];
        $TicketTime = $_POST['Ticket_Purchases_AssignedTo2TicketTime'];
        $GroupNumber = $_POST['Ticket_Purchases_AssignedTo2GroupNumber'];
        $sql = "INSERT INTO Ticket_Purchases_AssignedTo2 VALUES($TicketNumber, '$TicketType', '$TicketDate', '$TicketTime', $GroupNumber)";
    } 

    if ($_POST['action'] == 'Insert Monitors') {
        $SecurityID = $_POST['MonitorsSecurityID'];
        $RoomName = $_POST['MonitorsRoomName'];
        $sql = "INSERT INTO Monitors VALUES($SecurityID, '$RoomName')";
    } 

    if ($_POST['action'] == 'Insert Artifact_Presents1') {
        $ArtifactName = $_POST['Artifact_Presents1ArtifactName'];
        $ArtifactEra = $_POST['Artifact_Presents1ArtifactEra'];
        $ArtifactOrigin = $_POST['Artifact_Presents1ArtifactOrigin'];
        $sql = "INSERT INTO Artifact_Presents1 VALUES('$ArtifactName', '$ArtifactEra', '$ArtifactOrigin')";
    } 

    if ($_POST['action'] == 'Insert Artifact_Presents2') {
        $ArtifactID = $_POST['Artifact_Presents2ArtifactID'];
        $ArtifactName = $_POST['Artifact_Presents2ArtifactName'];
        $RoomName = $_POST['Artifact_Presents2RoomName'];
        $sql = "INSERT INTO Artifact_Presents2 VALUES($ArtifactID, '$ArtifactName', '$RoomName')";
    } 

    if ($_POST['action'] == 'Insert Exhibit_Has') {
        $ExhibitName = $_POST['Exhibit_HasExhibitName'];
        $ExhibitLastServiceDate = $_POST['Exhibit_HasExhibitLastServiceDate'];
        $ExhibitTopic = $_POST['Exhibit_HasExhibitTopic'];
        $RoomName = $_POST['Exhibit_HasRoomName'];
        $sql = "INSERT INTO Exhibit_Has VALUES('$ExhibitName', '$ExhibitLastServiceDate', '$ExhibitTopic', '$RoomName')";
    } 

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
            }
?>
</div>
</html>