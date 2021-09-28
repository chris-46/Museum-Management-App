<!DOCTYPE html> 

<head>
  <link rel="stylesheet" href="insertion.css">
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

<form action="process-insertion.php" method="post"> 

<!-- <head>
  <title>Insert Values</title>
</head> -->

<div class="box">
    <b>Insert Locker</b>
    </br>
    </br>
        <label>Locker Number: </label>
        <input name="LockerLockerNumber" type="number" placeholder="Enter new value">
        </br></br>
        <input type="submit" name = "action" value="Insert Locker">

    </br>
    </br>
    </br>
    <hr>
    </br>
    </br>

    <b>Insert Visitor</b>
    </br>
    </br>
        <label>Visitor Name: </label>
        <input name="VisitorVisitorName" type="text" placeholder="Enter new value">
        </br>
        <label>Visitor Phone Number: </label>
        <input name="VisitorVisitorPhoneNumber" type="text" placeholder="Enter new value">
        </br>
        <label>Visitor Age: </label>
        <input name="VisitorVisitorAge" type="number" placeholder="Enter new value">
        </br></br>
        <input type="submit" name = "action" value="Insert Visitor">

    </br>
    </br>
    </br>
    <hr>
    </br>
    </br>

    <b>Insert StoresBelongings</b>
    </br>
    </br>
        <label>Locker Number: </label>
        <input name="StoresBelongingsLockerNumber" type="number" placeholder="Enter new value">
        </br>
        <label>Visitor Name: </label>
        <input name="StoresBelongingsVisitorName" type="text" placeholder="Enter new value">
        </br>
        <label>Visitor Phone Number: </label>
        <input name="StoresBelongingsVisitorPhoneNumber" type="text" placeholder="Enter new value">
        </br></br>
        <input type="submit" name = "action" value="Insert StoresBelongings">

    </br>
    </br>
    </br>
    <hr>
    </br>
    </br>

    <b>Insert Brings_Infant</b>
    </br>
    </br>
        <label>Infant Name: </label>
        <input name="Brings_InfantInfantName" type="text" placeholder="Enter new value">
        </br>
        <label>Infant Age: </label>
        <input name="Brings_InfantInfantAge" type="number" placeholder="Enter new value">
        </br>
        <label>Visitor Name: </label>
        <input name="Brings_InfantVisitorName" type="text" placeholder="Enter new value">
        </br>
        <label>Visitor Phone Number: </label>
        <input name="Brings_InfantVisitorPhoneNumber" type="text" placeholder="Enter new value">
        </br></br>
        <input type="submit" name = "action" value="Insert Brings_Infant">

    </br>
    </br>
    </br>
    <hr>
    </br>
    </br>

    <b>Insert Room</b>
    </br>
    </br>
        <label>Room Name: </label>
        <input name="RoomRoomName" type="text" placeholder="Enter new value">
        </br>
        <label>Room Capacity: </label>
        <input name="RoomRoomCapacity" type="number" placeholder="Enter new value">
        </br>
        <label>Room Theme: </label>
        <input name="RoomRoomTheme" type="text" placeholder="Enter new value">
        </br></br>
        <input type="submit" name = "action" value="Insert Room">

    </br>
    </br>
    </br>
    <hr>
    </br>
    </br>

    <b>Insert Staff</b>
    </br>
    </br>
        <label>Staff ID: </label>
        <input name="StaffStaffID" type="number" placeholder="Enter new value">
        </br>
        <label>Staff Name: </label>
        <input name="StaffStaffName" type="text" placeholder="Enter new value">
        </br></br>
        <input type="submit" name = "action" value="Insert Staff">

    </br>
    </br>
    </br>
    <hr>
    </br>
    </br>

    <b>Insert TourGuide</b>
    </br>
    </br>
        <label>Staff ID: </label>
        <input name="TourGuideStaffID" type="number" placeholder="Enter new value">
        </br>
        <label>Tour Guide Specialty: </label>
        <input name="TourGuideTourGuideSpecialty" type="text" placeholder="Enter new value">
        </br></br>
        <input type="submit" name = "action" value="Insert TourGuide">

    </br>
    </br>
    </br>
    <hr>
    </br>
    </br>

    <b>Insert Security1</b>
    </br>
    </br>
        <label>Security Ranking: </label>
        <input name="Security1SecurityRanking" type="number" placeholder="Enter new value">
        </br></br>
        <input type="submit" name = "action" value="Insert Security1">

    </br>
    </br>
    </br>
    <hr>
    </br>
    </br>

    <b>Insert Security2</b>
    </br>
    </br>
        <label>Staff ID: </label>
        <input name="Security2StaffID" type="number" placeholder="Enter new value">
        </br>
        <label>Security Ranking: </label>
        <input name="Security2SecurityRanking" type="number" placeholder="Enter new value">
        </br></br>
        <input type="submit" name = "action" value="Insert Security2">

    </br>
    </br>
    </br>
    <hr>
    </br>
    </br>

    <b>Insert Group_StartsIn_Guides</b>
    </br>
    </br>
        <label>Group Number: </label>
        <input name="Group_StartsIn_GuidesGroupNumber" type="number" placeholder="Enter new value">
        </br>
        <label>Group Size: </label>
        <input name="Group_StartsIn_GuidesGroupSize" type="number" placeholder="Enter new value">
        </br>
        <label>Group Maximum Size: </label>
        <input name="Group_StartsIn_GuidesGroupMaximumSize" type="number" placeholder="Enter new value">
        </br>
        <label>Starts In Time: </label>
        <input name="Group_StartsIn_GuidesStartsInTime" type="time" placeholder="Enter new value">
        </br>
        <label>Room Name: </label>
        <input name="Group_StartsIn_GuidesRoomName" type="text" placeholder="Enter new value">
        </br>
        <label>Tour Guide ID: </label>
        <input name="Group_StartsIn_GuidesTourGuideID" type="number" placeholder="Enter new value">
        </br></br>
        <input type="submit" name = "action" value="Insert Group_StartsIn_Guides">

    </br>
    </br>
    </br>
    <hr>
    </br>
    </br>

    <b>Insert Ticket_Purchases_AssignedTo1</b>
    </br>
    </br>
        <label>Visitor Name: </label>
        <input name="Ticket_Purchases_AssignedTo1VisitorName" type="text" placeholder="Enter new value">
        </br>
        <label>Visitor Phone Number: </label>
        <input name="Ticket_Purchases_AssignedTo1VisitorPhoneNumber" type="text" placeholder="Enter new value">
        </br>
        <label>Ticket Number: </label>
        <input name="Ticket_Purchases_AssignedTo1TicketNumber" type="number" placeholder="Enter new value">
        </br>
        <label>Purchases Date: </label>
        <input name="Ticket_Purchases_AssignedTo1PurchasesDate" type="date" placeholder="Enter new value">
        </br></br>
        <input type="submit" name = "action" value="Insert Ticket_Purchases_AssignedTo1">

    </br>
    </br>
    </br>
    <hr>
    </br>
    </br>

    <b>Insert Ticket_Purchases_AssignedTo2</b>
    </br>
    </br>
        <label>Ticket Number: </label>
        <input name="Ticket_Purchases_AssignedTo2TicketNumber" type="number" placeholder="Enter new value">
        </br>
        <label>Ticket Type: </label>
        <input name="Ticket_Purchases_AssignedTo2TicketType" type="text" placeholder="Enter new value">
        </br>
        <label>Ticket Date: </label>
        <input name="Ticket_Purchases_AssignedTo2TicketDate" type="date" placeholder="Enter new value">
        </br>
        <label>Ticket Time: </label>
        <input name="Ticket_Purchases_AssignedTo2TicketTime" type="time" placeholder="Enter new value">
        </br>
        <label>Group Number: </label>
        <input name="Ticket_Purchases_AssignedTo2GroupNumber" type="number" placeholder="Enter new value">
        </br></br>
        <input type="submit" name = "action" value="Insert Ticket_Purchases_AssignedTo2">

    </br>
    </br>
    </br>
    <hr>
    </br>
    </br>

    <b>Insert Monitors</b>
    </br>
    </br>
        <label>Security ID: </label>
        <input name="MonitorsSecurityID" type="number" placeholder="Enter new value">
        </br>
        <label>Room Name: </label>
        <input name="MonitorsRoomName" type="text" placeholder="Enter new value">
        </br></br>
        <input type="submit" name = "action" value="Insert Monitors">

    </br>
    </br>
    </br>
    <hr>
    </br>
    </br>

    <b>Insert Artifact_Presents1</b>
    </br>
    </br>
        <label>Artifact Name: </label>
        <input name="Artifact_Presents1ArtifactName" type="text" placeholder="Enter new value">
        </br>
        <label>Artifact Era: </label>
        <input name="Artifact_Presents1ArtifactEra" type="text" placeholder="Enter new value">
        </br>
        <label>Artifact Origin: </label>
        <input name="Artifact_Presents1ArtifactOrigin" type="text" placeholder="Enter new value">
        </br></br>
        <input type="submit" name = "action" value="Insert Artifact_Presents1">

    </br>
    </br>
    </br>
    <hr>
    </br>
    </br>

    <b>Insert Artifact_Presents2</b>
    </br>
    </br>
        <label>Artifact ID: </label>
        <input name="Artifact_Presents2ArtifactID" type="number" placeholder="Enter new value">
        </br>
        <label>Artifact Name: </label>
        <input name="Artifact_Presents2ArtifactName" type="text" placeholder="Enter new value">
        </br>
        <label>Room Name: </label>
        <input name="Artifact_Presents2RoomName" type="text" placeholder="Enter new value">
        </br></br>
        <input type="submit" name = "action" value="Insert Artifact_Presents2">

    </br>
    </br>
    </br>
    <hr>
    </br>
    </br>

    <b>Insert Exhibit_Has</b>
    </br>
    </br>
        <label>Exhibit Name: </label>
        <input name="Exhibit_HasExhibitName" type="text" placeholder="Enter new value">
        </br>
        <label>Exhibit Last Service Date: </label>
        <input name="Exhibit_HasExhibitLastServiceDate" type="date" placeholder="Enter new value">
        </br>
        <label>Exhibit Topic: </label>
        <input name="Exhibit_HasExhibitTopic" type="text" placeholder="Enter new value">
        </br>
        <label>Room Name: </label>
        <input name="Exhibit_HasRoomName" type="text" placeholder="Enter new value">
        </br></br>
        <input type="submit" name = "action" value="Insert Exhibit_Has">
        </br>
        </br>
        </br>
        <hr>
</div>

</form>