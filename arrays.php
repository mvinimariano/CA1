<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array</title>
</head>
<!-- include header php to the page -->
  <?php include('include/header.php');?>

<body>
<!-- some styling for the page -->
<style>
  table,tr,td{
    border: 1px solid black;

  }

  table{
    table-layout: auto;
    width: 100%;

  }

  td{
    padding-left: 5px;
  }
  th{
    border: 1px solid black;
    padding-left: 5px;
    font-size: 18px;
    background-color: lightgray;

  }
  .container{
    margin-bottom: 50px;

  }

  </style>




<div class="container" style="margin-top:70px">
  
<!-- table to get the array -->
<table>


       <tr><th>Country</th><th>Capital</th></tr>

   <?php
       $country = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
       

       foreach($country as $x => $x_value) {

        echo "<tr><td> $x</td><td>$x_value</td></tr>";
     }
   ?>
   </table>
<!-- getting the array and printing the key and value using a foreach-->
   </div>




</body>
</html>

<!-- including footer php to the page -->
<?php include('include/footer.php');?>