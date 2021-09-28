<!DOCTYPE html> 

<head>
  <link rel="stylesheet" href="selection.css">
</head>


<div class="header">
  <b style="family:verdana" >Selection</b>
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

<form action="process-selection.php" method="post"> 

<div class="boxone">
</br>
</br>
    Select Group Information
    </br>
    </br>

        <label>See </label>
        <select name='GroupField'>
            <option value="*">All Attributes</option>
            <option value="Group_Number">Group Number</option>
            <option value="Group_Size">Group Size</option>
            <option value="Group_MaximumSize">Group Maximum Size</option>
            <option value="StartsIn_Time">Group Start Time</option>
            <option value="Room_Name">Room Name</option>
            <option value="TourGuide_ID">Tour Guide ID</option>
        </select>

        <label>where </label>
        <select name='GroupField2'>
            <option value="Group_Size">Group Size</option>
            <option value="Group_MaximumSize">Group Maximum Size</option>
            <option value="StartsIn_Time">Group Start Time</option>
            <option value="Room_Name">Room Name</option>
            <option value="TourGuide_ID">Tour Guide ID</option>
        </select>
        <select name='GroupComparator'>
            <option value=">">></option>
            <option value="<"><</option>
            <option value="=">=</option>
        </select>

        <input name="GroupComparator2" type="string" placeholder="Enter new value">
        

        <input type="submit" name = "action" value="Get Groups">

    </br>
    </br>
    </br>
    </br>
    <hr>
    </br>
    </br>
    Select Ticket Specific Information
    </br>
    </br>
    
    <label>See </label>
        <select name='TicketField'>
            <option value="*">All Attributes</option>
            <option value="Ticket_Number">Ticket Number</option>
            <option value="Ticket_Type">Ticket Type</option>
            <option value="Ticket_Date">Ticket Date</option>
            <option value="Ticket_Time">Ticket Time</option>
            <option value="Group_Number">Group Number</option>
        </select>

        <label>where </label>
        <select name='TicketField2'>
            <option value="Ticket_Number">Ticket Number</option>
            <option value="Ticket_Type">Ticket Type</option>
            <option value="Ticket_Date">Ticket Date</option>
            <option value="Ticket_Time">Ticket Time</option>
            <option value="Group_Number">Group Number</option>
        </select>
        <select name='TicketComparator'>
            <option value=">">></option>
            <option value="<"><</option>
            <option value="=">=</option>
        </select>

        <input name="TicketComparator2" type="string" placeholder="Enter new value">
        

        <input type="submit" name = "action" value="Get Ticket Info">
        </br>
        </br>
        </br>
        </br>
        <hr>

</div>
</html>

