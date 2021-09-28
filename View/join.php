<!DOCTYPE html> 

<head>
  <link rel="stylesheet" href="join.css">
</head>


<div class="header">
  <b style="family:verdana" >Museum Security Management</b>
</div>


<style>
  body {
    background-image: url('./security.jpeg');
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }
</style>

<form action="process-join.php" method="post"> 

<div class="boxone">
</br>
    </br>
    </br>

    
        Retrieve Security Information,

        <select name='securityAttbs'>
                <option value="Staff.Staff_ID, Staff_Name,Security1.Security_Ranking,Security_CanAccessVault">all attributes</option>
                <option value="Staff.Staff_ID">ID</option>
                <option value="Staff_Name">Name</option>
                <option value="Security1.Security_Ranking">Rank</option>
                <option value="Security_CanAccessVault">Ability to Access Vault</option>
        </select>

        where 
        rank
        <select name='SecurityComparator'>
                <option value=">">></option>
                <option value="<"><</option>
                <option value="=">=</option>
        </select>

        <input name="SecurityRank" type="number" placeholder="Enter new value">
        </br>
        </br>
        <input type="submit" name = "action" value="Get Security Info">
        </br>
        </br>
        </br>

        <hr>
        </br>
        </br>
        </br>


        Retrieve Security Information,
        <select name='securityAttbs2'>
                <option value="Staff_Name,Staff.Staff_ID,Security_Ranking">all attributes</option>
                <option value="Staff.Staff_ID">ID</option>
                <option value="Staff_Name">Name</option>
                <option value="Security_Ranking">Rank</option>
        </select>

        of the Security that monitors room


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
        <input type="submit" name = "action" value="Get Room Security Info">

        </br>
    </br>
    </br>
    <hr>
</div>
</html>