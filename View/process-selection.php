<!DOCTYPE html> 

<head>
  <link rel="stylesheet" href="process-selection.css">
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
    
    $conn = OpenCon();

    if ($_POST['action'] == 'Get Groups') {
        $GroupField = $_POST['GroupField'];
        $GroupField2 = $_POST['GroupField2'];
        $GroupComparator = $_POST['GroupComparator'];
        $GroupComparator2 = $_POST['GroupComparator2'];

        $sql = "select $GroupField from  Group_StartsIn_Guides where $GroupField2 $GroupComparator '$GroupComparator2'";
    } 

    if ($_POST['action'] == 'Get Ticket Info') {
        $TicketField = $_POST['TicketField'];
        $TicketField2 = $_POST['TicketField2'];
        $TicketComparator = $_POST['TicketComparator'];
        $TicketComparator2 = $_POST['TicketComparator2'];

        $sql = "select $TicketField from  Ticket_Purchases_AssignedTo2 where $TicketField2 $TicketComparator '$TicketComparator2'";
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