<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<!-- include header php to the page -->
<?php include('include/header.php');?>
<!-- include some styling to the page -->
<style>

.cont1{
border-top:1px solid black ;

margin-bottom: 50px;
padding: 50px;
border-bottom: 1px solid black;
}

</style>



<body>
<div class="cont1" style="margin-top:70px">


<!-- input box to the user input -->
<form action="formAnswer.php" method="post">
Enter a Country name: <input type="text" name="country"><br>
<input type="submit">
</form>




</div>    
</body>
</html>


<!-- include footer to the page -->
<?php include('include/footer.php');?>