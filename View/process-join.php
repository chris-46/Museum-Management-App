<!DOCTYPE html> 

<head>
  <link rel="stylesheet" href="process-join.css">
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

    if ($_POST['action'] == 'Get Security Info') {  
        $attbs = $_POST['securityAttbs'];
        $SecurityComparator = $_POST['SecurityComparator'];
        $SecurityRank = $_POST['SecurityRank'];
        $sql = "select $attbs 
        from Staff, Security1, Security2 
        where Staff.Staff_ID = Security2.Staff_ID AND Security1.Security_Ranking = Security2.Security_Ranking and
        Security1.Security_Ranking $SecurityComparator $SecurityRank
        ";
    } 
    if ($_POST['action'] == 'Get Room Security Info') {  
        $Roomid = $_POST['Roomid'];
        $securityAttbs2 = $_POST['securityAttbs2'];
        
        $sql = "select $securityAttbs2 
        from Monitors, Security2, Staff
        where Staff.Staff_ID = Security2.Staff_ID AND Monitors.Security_ID = Security2.Staff_ID and
        Monitors.Room_Name = '$Roomid'
        ";
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