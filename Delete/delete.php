<!DOCTYPE html> 

<head>
  <link rel="stylesheet" href="delete.css">
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

<form action="process-delete.php" method="post"> 


<div class="boxone">
    <b>Delete Locker</b>
    </br>
    </br>
        <label>Locker</label>
        <?php
            include '../connect.php';
            $conn = OpenCon();
            $result = $conn->query("select Locker_Number from Locker");
            echo "<select name='Locker_Number'>";
            while ($row = $result->fetch_assoc())
                {
                    unset($Locker_Number);
                    $Locker_Number = $row['Locker_Number'];
                    echo '<option value="'.$Locker_Number.'">'.$Locker_Number.'</option>';
                }
            echo "</select>";
        ?>
        <input type="submit" name = "action" value="Delete Locker">

        </br>
</br>

<hr>

</br>


    <b>Delete Staff</b>
    </br>
    </br>
        <label>Staff</label>
        <?php
            $result = $conn->query("select Staff_ID from Staff");
            echo "<select name='Staff_ID'>";
            while ($row = $result->fetch_assoc())
                {
                    unset($Staff_ID);
                    $Staff_ID = $row['Staff_ID'];
                    echo '<option value="'.$Staff_ID.'">'.$Staff_ID.'</option>';
                }
            echo "</select>";
        ?>
        <input type="submit" name = "action" value="Delete Staff">
        </br>
</br>

<hr>
</br>


        
    <b>Delete Ticket Purchased</b>
    </br>
    </br>
        <label>Ticket_Number</label>
        <?php
            $result = $conn->query("select Ticket_Number from Ticket_Purchases_AssignedTo1");
            echo "<select name='Ticket_Number'>";
            while ($row = $result->fetch_assoc())
                {
                    unset($Staff_ID);
                    $Ticket_Number = $row['Ticket_Number'];
                    echo '<option value="'.$Ticket_Number.'">'.$Ticket_Number.'</option>';
                }
            echo "</select>";
        ?>
        <input type="submit" name = "action" value="Delete Ticket">


</br>
</br>
<hr>
</br>

       
    <b>Delete Artifact Name</b>
    </br>
    </br>
        <label>Artifact Name</label>
        <?php
            $result = $conn->query("select Artifact_Name from Artifact_Presents1");
            echo "<select name='Artifact_Name'>";
            while ($row = $result->fetch_assoc())
                {
                    unset($Artifact_Name);
                    $Artifact_Name = $row['Artifact_Name'];
                    echo '<option value="'.$Artifact_Name.'">'.$Artifact_Name.'</option>';
                }
            echo "</select>";
        ?>
        <input type="submit" name = "action" value="Delete Artifact">


</br>
</br>
<hr>

</br>
      
    <b>Delete Visitor </b>
    </br>
    </br>
    <label>Name </label>
    <input name="Visitor_Name" type="text" placeholder="Enter name">
    
    <label>Phone Number </label>
    <input name="Visitor_PhoneNumber" type="text" placeholder="Enter phone number">
    <input type="submit" name = "action" value="Delete Visitor">
    </br>
    </br>
    </br>
    <hr>
</div>
</html>