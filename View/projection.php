<!DOCTYPE html> 

<head>
  <link rel="stylesheet" href="project.css">
</head>


<div class="header">
  <b style="family:verdana" >Projection</b>
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

<form action="process-projection.php" method="post"> 

<div class="boxone">
    </br>
    Project Locker
    </br>
    </br>
        <label>Field: </label>
        <select name='LockerField'>
            <option value="Locker_Number">Locker Number</option>
        </select>    

        <input type="submit" name = "action" value="Project Locker">

    </br>
    </br>
    </br>
    <hr>
    </br>


    Project Visitor
    </br>
    </br>
        <label>Field: </label>
        <select name='VisitorField'>
            <option value="Visitor_Name">Visitor Name</option>
            <option value="Visitor_PhoneNumber">Visitor Phone Number</option>
            <option value="Visitor_Age">Visitor Age</option>
        </select>    

        <input type="submit" name = "action" value="Project Visitor">

    </br>
    </br>
    </br>
    <hr>
    </br>

    Project StoresBelongings
    </br>
    </br>
        <label>Field: </label>
        <select name='StoresBelongingsField'>
            <option value="Locker_Number">Locker Number</option>
            <option value="Visitor_Name">Visitor Name</option>
            <option value="Visitor_PhoneNumber">Visitor Phone Number</option>
        </select>    

        <input type="submit" name = "action" value="Project StoresBelongings">

    </br>
    </br>
    </br>
    <hr>
    </br>

    Project Brings_Infant
    </br>
    </br>
        <label>Field: </label>
        <select name='BringsInfantField'>
            <option value="Infant_Name">Infant Name</option>
            <option value="Infant_Age">Infant Age</option>
            <option value="Visitor_Name">Visitor Name</option>
            <option value="Visitor_PhoneNumber">Visitor Phone Number</option>
        </select>    

        <input type="submit" name = "action" value="Project Brings_Infant">

    </br>
    </br>
    </br>
    <hr>
    </br>

    Project Room
    </br>
    </br>
        <label>Field: </label>
        <select name='RoomField'>
            <option value="Room_Name">Room Name</option>
            <option value="Room_Capacity">Room Capacity</option>
            <option value="Room_Theme">Room Theme</option>
        </select>    

        <input type="submit" name = "action" value="Project Room">

    </br>
    </br>
    </br>
    <hr>
    </br>

    Project Staff
    </br>
    </br>
        <label>Field: </label>
        <select name='StaffField'>
            <option value="Staff_ID">Staff ID</option>
            <option value="Staff_Name">Staff Name</option>
        </select>    

        <input type="submit" name = "action" value="Project Staff">

    </br>
    </br>
    </br>
    <hr>
    </br>

    Project TourGuide
    </br>
    </br>
        <label>Field: </label>
        <select name='TourGuideField'>
            <option value="Staff_ID">Staff ID</option>
            <option value="TourGuide_Specialty">Tour Guide Specialty</option>
        </select>    

        <input type="submit" name = "action" value="Project TourGuide">

    </br>
    </br>
    </br>
    <hr>
    </br>

    Project Security1
    </br>
    </br>
        <label>Field: </label>
        <select name='Security1Field'>
            <option value="Security_Ranking">Security Ranking</option>
            <option value="Security_CanAccessVault">Security Can Access Vault</option>
        </select>    

        <input type="submit" name = "action" value="Project Security1">

    </br>
    </br>
    </br>
    <hr>
    </br>


    Project Security2
    </br>
    </br>
        <label>Field: </label>
        <select name='Security2Field'>
            <option value="Staff_ID">Staff ID</option>
            <option value="Security_Ranking">Security Ranking</option>
        </select>    

        <input type="submit" name = "action" value="Project Security2">

    </br>
    </br>
    </br>
    <hr>
    </br>

    Project Group_StartsIn_Guides
    </br>
    </br>
        <label>Field: </label>
        <select name='GroupField'>
            <option value="Group_Number">Group Number</option>
            <option value="Group_Size">Group Size</option>
            <option value="Group_MaximumSize">Group Maximum Size</option>
            <option value="StartsIn_Time">Group Start Time</option>
            <option value="Room_Name">Room Name</option>
            <option value="TourGuide_ID">Tour Guide ID</option>
        </select>    

        <input type="submit" name = "action" value="Project Group_StartsIn_Guides">

    </br>
    </br>
    </br>
    <hr>
    </br>

    Project Ticket_Purchases_AssignedTo1
    </br>
    </br>
        <label>Field: </label>
        <select name='TicketPurchasesAssignedTo1Field'>
            <option value="Visitor_Name">Visitor Name</option>
            <option value="Visitor_PhoneNumber">Visitor Phone Number</option>
            <option value="Ticket_Number">Ticket Number</option>
            <option value="Purchases_Date">Purchases Date</option>
        </select>    

        <input type="submit" name = "action" value="Project Ticket_Purchases_AssignedTo1">

    </br>
    </br>
    </br>
    <hr>
    </br>

    Project Ticket_Purchases_AssignedTo2
    </br>
    </br>
        <label>Field: </label>
        <select name='TicketPurchasesAssignedTo2Field'>
            <option value="Ticket_Number">Ticket Number</option>
            <option value="Ticket_Type">Ticket Type</option>
            <option value="Ticket_Date">Ticket Date</option>
            <option value="Ticket_Time">Ticket Time</option>
            <option value="Group_Number">Group Number</option>
        </select>    

        <input type="submit" name = "action" value="Project Ticket_Purchases_AssignedTo2">

    </br>
    </br>
    </br>
    <hr>
    </br>

    Project Monitors
    </br>
    </br>
        <label>Field: </label>
        <select name='MonitorsField'>
            <option value="Security_ID">Security ID</option>
            <option value="Room_Name">Room Name</option>
        </select>    

        <input type="submit" name = "action" value="Project Monitors">

    </br>
    </br>
    </br>
    <hr>
    </br>


    Project Artifact_Presents1
    </br>
    </br>
        <label>Field: </label>
        <select name='ArtifactPresents1Field'>
            <option value="Artifact_Name">Artifact Name</option>
            <option value="Artifact_Era">Artifact Era</option>
            <option value="Artifact_Origin">Artifact Origin</option>
        </select>    

        <input type="submit" name = "action" value="Project Artifact_Presents1">

        </br>
    </br>
    </br>
    <hr>
    </br>


    Project Artifact_Presents2
    </br>
    </br>
        <label>Field: </label>
        <select name='ArtifactPresents2Field'>
            <option value="Artifact_ID">Artifact ID</option>
            <option value="Artifact_Name">Artifact Name</option>
            <option value="Room_Name">Room Name</option>
        </select>    

        <input type="submit" name = "action" value="Project Artifact_Presents2">

        </br>
    </br>
    </br>
    <hr>
    </br>


    Project Exhibit_Has
    </br>
    </br>
        <label>Field: </label>
        <select name='ExhibitHasField'>
            <option value="Exhibit_Name">Exhibit Name</option>
            <option value="Exhibit_LastServiceDate">Exhibit Last Service Date</option>
            <option value="Exhibit_Topic">Exhibit Topic</option>
            <option value="Room_Name">Room Name</option>
        </select>    

        <input type="submit" name = "action" value="Project Exhibit_Has">
        </br>
    </br>
    </br>
    <hr>
    </br>

</div>
</html>