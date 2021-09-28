<!DOCTYPE html> 

<head>
  <link rel="stylesheet" href="aggregationsAndDivide.css">
</head>


<div class="header">
  <b style="family:verdana" >Visitor Statistics</b>
</div>


<style>
  body {
    background-image: url('./people.jpeg');
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }
</style>

<form action="process-aggregationAndDivide.php" method="post"> 


<div class="boxone">
</br></br>
    Retrieve Visitor Information
    <input type="submit" name = "action" value="Get Visitor Info">

    </br>
    </br>
    </br>
    <hr>
    </br></br>



        <select name='VisitorAgg'>
            <option value="max">max</option>
            <option value="min">min</option>
            <option value="avg">avg</option>
        </select>  

    age of Visitors
    <input type="submit" name = "action" value="Get Age">

    </br></br>
    </br>
    <hr>
    </br></br>

    Number of Visitors Each Day
    <input type="submit" name = "action" value="Get Number of Visitors">

    </br></br>
    </br>
    <hr>
    </br></br>

    <select name='VisitorAgg2'>
            <option value="max">max</option>
            <option value="min">min</option>
            <option value="avg">avg</option>
    </select>
    age of infants in a family
    <input type="submit" name = "action" value="Get Infant Age">

    </br>
    </br>
    </br>
    <hr>
    </br></br>


    <form action="process-divide.php" method="post"> 
    Show 
    <select name='attbs'>
            <option value="*">all attributes</option>
            <option value="Visitor_Name">Names</option>
            <option value="Visitor_PhoneNumber">Phone Numbers</option>
            <option value="Visitor_Age">Ages</option>
    </select>

    of Loyal Visitors
    <input type="submit" name = "action" value="Get Visitors">
    </br>
    </br>
    </br>
    <hr>
</div>
</html>

