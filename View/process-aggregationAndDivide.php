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

    if ($_POST['action'] == 'Get Visitor Info') {        
        $sql = "select Visitor.Visitor_Name, Ticket_Purchases_AssignedTo2.Ticket_Number, Ticket_Purchases_AssignedTo2.Ticket_Type, Ticket_Purchases_AssignedTo2.Ticket_Date, Ticket_Purchases_AssignedTo2.Ticket_Time, Ticket_Purchases_AssignedTo2.Group_Number, Ticket_Purchases_AssignedTo1.Purchases_Date from Visitor, Ticket_Purchases_AssignedTo1, Ticket_Purchases_AssignedTo2 where Visitor.Visitor_Name = Ticket_Purchases_AssignedTo1.Visitor_Name and Visitor.Visitor_PhoneNumber = Ticket_Purchases_AssignedTo1.Visitor_PhoneNumber and Ticket_Purchases_AssignedTo1.Ticket_Number = Ticket_Purchases_AssignedTo2.Ticket_Number";
    };



    if ($_POST['action'] == 'Get Age') {   
        $VisitorAgg = $_POST['VisitorAgg'];
        $sql = "select $VisitorAgg(Visitor_Age) from Visitor";
    } 
    
    if ($_POST['action'] == 'Get Number of Visitors') {        
        $sql = "select Ticket_Date, Count(*) from Ticket_Purchases_Assignedto2 group by Ticket_Date";
    };

    if ($_POST['action'] == 'Get Infant Age') {   
        $VisitorAgg2 = $_POST['VisitorAgg2'];
        $sql = "select Visitor_Name AS 'Family Representative', $VisitorAgg2(Infant_Age) from Brings_Infant group by Visitor_Name";

    } 

    if ($_POST['action'] == 'Get Visitors') {  
        $attbs = $_POST['attbs'];      
        $sql = "
        select $attbs
        from Visitor
        where not exists
            (
                select Ticket_Type
                from Ticket_Purchases_AssignedTo2
                group by Ticket_Type
                except
                    (
                        select Ticket_Purchases_AssignedTo2.Ticket_Type
                        from Ticket_Purchases_AssignedTo2, Ticket_Purchases_AssignedTo1
                        where 
                        Ticket_Purchases_AssignedTo1.Ticket_Number = Ticket_Purchases_AssignedTo2.Ticket_Number and
                        Ticket_Purchases_AssignedTo1.Visitor_Name = Visitor.Visitor_Name and
                        Ticket_Purchases_AssignedTo1.Visitor_PhoneNumber = Visitor.Visitor_PhoneNumber
                    )
            )";
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