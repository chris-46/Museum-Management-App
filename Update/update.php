<!DOCTYPE html> 

<head>
  <link rel="stylesheet" href="update.css">
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
    <form action="process-update.php" method="post"> 
    <b>Update Room</b>
    </br>
    </br>
        <label>Room</label>
        <?php
            include '../connect.php';
            $conn = OpenCon();
            $result = $conn->query("select Room_Name from Room");
            echo "<select name='Roomid'>";
            while ($row = $result->fetch_assoc())
                {
                    unset($Room_Name);
                    $Room_Name = $row['Room_Name'];
                    echo '<option value="'.$Room_Name.'">'.$Room_Name.'</option>';
                }
            echo "</select>";
        ?>

    </br>
    </br>
        <label>Update Room Capacity: </label>
        <input name="RoomCapacity" type="number" placeholder="Enter new value">
        <input type="submit" name = "action" value="Submit Room Capacity">
        </br>
    </br>
        <label>Update Room Theme: </label>
        <input name="RoomTheme" type="text" placeholder="Enter new value">
        <input type="submit" name = "action" value="Submit Room Theme">
</br>
</br>
</br>


<hr>
</br>
</br>
    <b>Update Group_StartsIn_Guides</b>
    </br>
    </br>
        <label>Group Number</label>
        <?php
            $result = $conn->query("select Group_Number from Group_StartsIn_Guides");
            echo "<select name='GSGid'>";
            while ($row = $result->fetch_assoc())
                {
                    unset($Group_Number);
                    $Group_Number = $row['Group_Number'];
                    echo '<option value="'.$Group_Number.'">'.$Group_Number.'</option>';
                }
            echo "</select>";
        ?>
    </br>
    </br>
        <label>Update Group Size: </label>
        <input name="GroupSize" type="number" placeholder="Enter new value">
        <input type="submit" name = "action" value="Submit Group Size">
        </br>
    </br>
    <label>Update Group Max Size: </label>
        <input name="GroupMaxSize" type="number" placeholder="Enter new value">
        <input type="submit" name = "action" value="Submit Group Max Size">
        </br>
    </br>
    <label>Update Start Time: </label>
        <input name="StartTime" type="time" placeholder="Enter new value">
        <input type="submit" name = "action" value="Submit Group Start Time">
</br>
</br>
</br>

<hr>
</br>
</br>



<b>Update Ticket_Purchases_AssignedTo2</b>
</br>
</br>
    <label>Ticket Number</label>
    <?php
        $result = $conn->query("select Ticket_Number from Ticket_Purchases_AssignedTo2");
        echo "<select name='TPAT2id'>";
        while ($row = $result->fetch_assoc())
            {
                unset($Ticket_Number);
                $Ticket_Number = $row['Ticket_Number'];
                echo '<option value="'.$Ticket_Number.'">'.$Ticket_Number.'</option>';
            }
        echo "</select>";
    ?>
</br>
</br>
    <label>Update Ticket Type: </label>
    <input name="TicketType" type="text" placeholder="Enter new value">
    <input type="submit" name = "action" value="Submit Ticket Type">
    </br>
</br>
    <label>Update Ticket Date: </label>
    <input name="TicketDate" type="date" placeholder="Enter new value">
    <input type="submit" name = "action" value="Submit Ticket Date">
    </br>
</br>
    <label>Update Ticket Time: </label>
    <input name="TicketTime" type="time" placeholder="Enter new value">
    <input type="submit" name = "action" value="Submit Ticket Time">

</br>
</br>
</br>

<hr>
</br>
</br>
    

<b>Update Artifact_Presents1</b>
</br>
</br>
    <label>Artifact Name</label>
    <?php
        $result = $conn->query("select Artifact_Name from Artifact_Presents1");
        echo "<select name='APid'>";
        while ($row = $result->fetch_assoc())
            {
                unset($Artifact_Name);
                $Artifact_Name = $row['Artifact_Name'];
                echo '<option value="'.$Artifact_Name.'">'.$Artifact_Name.'</option>';
            }
        echo "</select>";
    ?>
</br>
</br>
    <label>Update Artifact Era: </label>
    <input name="ArtifactEra" type="string" placeholder="Enter new value">
    <input type="submit" name = "action" value="Submit Artifact Era">
    </br>
</br>
<label>Update Artifact Origin: </label>
    <input name="ArtifactOrigin" type="string" placeholder="Enter new value">
    <input type="submit" name = "action" value="Submit Artifact Origin">
</br>
</br>
</br>
<hr>
</br>
</br>


<b>Update Exhibit_Has</b>
</br>
</br>
    <label>Exhibit Name</label>
    <?php
        $result = $conn->query("select Exhibit_Name from Exhibit_Has");
        echo "<select name='EHid'>";
        while ($row = $result->fetch_assoc())
            {
                unset($Exhibit_Name);
                $Exhibit_Name = $row['Exhibit_Name'];
                echo '<option value="'.$Exhibit_Name.'">'.$Exhibit_Name.'</option>';
            }
        echo "</select>";
    ?>
</br>
</br>
    <label>Update Exhibit Last Service Date: </label>
    <input name="ExhibitLastServiceDate" type="date" placeholder="Enter new value">
    <input type="submit" name = "action" value="Submit Exhibit Last Service Date">
    </br>
</br>
<label>Update Exhibit Topic: </label>
    <input name="ExhibitTopic" type="string" placeholder="Enter new value">
    <input type="submit" name = "action" value="Submit Exhibit Topic">
</br>
</br>
</br>
<hr>
</br>
</br>



<b>Update Security2</b>
</br>
</br>
    <label>Staff ID</label>
    <?php
        $result = $conn->query("select Staff_ID from Security2");
        echo "<select name='S2id'>";
        while ($row = $result->fetch_assoc())
            {
                unset($Staff_ID);
                $Staff_ID = $row['Staff_ID'];
                echo '<option value="'.$Staff_ID.'">'.$Staff_ID.'</option>';
            }
        echo "</select>";
    ?>
</br>
</br>
    <label>Update Security Ranking: </label>
    <input name="SecurityRanking" type="number" placeholder="Enter new value">
    <input type="submit" name = "action" value="Submit Security Ranking">
    </br></br>
        </br>
        </br>
        <hr>
</div>
</html>