<!DOCTYPE html> 

<head>
  <link rel="stylesheet" href="process-projection.css">
</head>


<div class="header">
  <b style="family:verdana" >Results</b>
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
    $LockerField = $_POST['LockerField'];
    $VisitorField = $_POST['VisitorField'];
    $StoresBelongingsField = $_POST['StoresBelongingsField'];
    $BringsInfantField = $_POST['BringsInfantField'];
    $RoomField = $_POST['RoomField'];
    $StaffField = $_POST['StaffField'];
    $TourGuideField = $_POST['TourGuideField'];
    $Security1Field = $_POST['Security1Field'];
    $Security2Field = $_POST['Security2Field'];
    $GroupField = $_POST['GroupField'];
    $TicketPurchasesAssignedTo1Field = $_POST['TicketPurchasesAssignedTo1Field'];
    $TicketPurchasesAssignedTo2Field = $_POST['TicketPurchasesAssignedTo2Field'];
    $MonitorsField = $_POST['MonitorsField'];
    $ArtifactPresents1Field = $_POST['ArtifactPresents1Field'];
    $ArtifactPresents2Field = $_POST['ArtifactPresents2Field'];
    $ExhibitHasField = $_POST['ExhibitHasField'];

    $conn = OpenCon();

    if ($_POST['action'] == 'Project Locker') {
        $sql = "select $LockerField from Locker";
    } 
    if ($_POST['action'] == 'Project Visitor') {
        $sql = "select $VisitorField from Visitor";
    } 
    if ($_POST['action'] == 'Project StoresBelongings') {
        $sql = "select $StoresBelongingsField from StoresBelongings";
    } 
    if ($_POST['action'] == 'Project Brings_Infant') {
        $sql = "select $BringsInfantField from Brings_Infant";
    } 
    if ($_POST['action'] == 'Project Room') {
        $sql = "select $RoomField from Room";
    } 
    if ($_POST['action'] == 'Project Staff') {
        $sql = "select $StaffField from Staff";
    } 
    if ($_POST['action'] == 'Project TourGuide') {
        $sql = "select $TourGuideField from TourGuide";
    } 
    if ($_POST['action'] == 'Project Security1') {
        $sql = "select $Security1Field from Security1";
    } 
    if ($_POST['action'] == 'Project Security2') {
        $sql = "select $Security2Field from Security2";
    } 
    if ($_POST['action'] == 'Project Group_StartsIn_Guides') {
        $sql = "select $GroupField from Group_StartsIn_Guides";
    } 
    if ($_POST['action'] == 'Project Ticket_Purchases_AssignedTo1') {
        $sql = "select $TicketPurchasesAssignedTo1Field from Ticket_Purchases_AssignedTo1";
    } 
    if ($_POST['action'] == 'Project Ticket_Purchases_AssignedTo2') {
        $sql = "select $TicketPurchasesAssignedTo2Field from Ticket_Purchases_AssignedTo2";
    } 
    if ($_POST['action'] == 'Project Monitors') {
        $sql = "select $MonitorsField from Monitors";
    } 
    if ($_POST['action'] == 'Project Artifact_Presents1') {
        $sql = "select $ArtifactPresents1Field from Artifact_Presents1";
    } 
    if ($_POST['action'] == 'Project Artifact_Presents2') {
        $sql = "select $ArtifactPresents2Field from Artifact_Presents2";
    } 
    if ($_POST['action'] == 'Project Exhibit_Has') {
        $sql = "select $ExhibitHasField from Exhibit_Has";
    } 

    $rsResult = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if(mysqli_num_rows($rsResult)>0){//We start with header. >>>Here we retrieve the field names<<< 
        echo "<table width=\"100%\" border=\"0\" cellspacing=\"2\"cellpadding=\"0\"><tr align=\"center\" bgcolor=\"#bd9d73\">";
        $i = 0;
        while ($i < mysqli_num_fields($rsResult)){
            $field = mysqli_fetch_field_direct($rsResult, $i);
            $fieldName=$field->name;
            echo "<td><strong>$fieldName</strong></td>";
            $i = $i + 1;
        }
        echo "</tr>";
        //>>>Field names retrieved<<<
        //We dump info
        $bolWhite=true;
        while ($row = mysqli_fetch_assoc($rsResult)) {
            echo $bolWhite ? "<tr bgcolor=\"#FAEBD7\">" : "<tr bgcolor=\"#FAEBD7\">";
            $bolWhite=!$bolWhite; 
            foreach($row as $data) {
                echo "<td>$data</td>";}echo "</tr>";}echo"</table>";}
?>
</div>
</html>