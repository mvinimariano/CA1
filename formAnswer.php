<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
<!-- including header php to the page -->
<?php include('include/header.php');?>    
</head>
<body>
<!-- some styling to the page -->
<style>
        .cont{
            border-top:1px solid black ;
            margin-bottom: 50px;
            padding: 50px;
            border-bottom: 1px solid black; 
            background-color: whitesmoke;
            
            
        }
        .cont p{
            font-size: 20px;
 

        }

    </style>


<div class="cont" style="margin-top:70px">
<?php
$country = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");


$name = ucwords($_POST["country"]);
//getting the input(post) and putting in a variable(name) and using ucwords to ignore case(change the first caracter to a uppercase to match the array)
$name = trim($name);
//getting the var(name) and trimming it to ignore the spaces and caracteres on the left and right of the input




foreach($_POST as $key => $value){
     if (array_key_exists($name, $country)) { //if to check the var(name) exists in the array (country)
         echo "<p>The Country you selected is ".$name ."</p>";// print the user input(name of the country)
        

          
         echo "<p>and the Capital is ".$country[$name]."</p>"; // print the value of the array key
        
    }else{
        echo "<p>Country not listed, try a different one.</p>";// if the input is not in the array
        
    }
    


    
}


?>
</div>








    
</body>
</html>
<?php include('include/footer.php');?> 
<!-- include the footer php to the page -->