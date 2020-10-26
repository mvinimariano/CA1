<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<!-- include header php for the page -->
<?php include('include/header.php');?>
<!-- adding some style for the page -->
<style>
.col-md-4{
  border: 1px solid black;
  padding: 10px;
  margin-top: 30px;
  margin-left: 20px;

}

.container{

margin-bottom: 50px;
padding: 30px;
border-bottom: 1px solid black;

}
h3{

border-top: 1px solid black;
border-bottom: 1px solid black;
text-align: center;
padding: 5px;

}



</style>
<body>
  <!-- adding a container to put an image and information -->
<div class="container" style="margin-top:50px">
  <h3>Marcos V. M. Rodrigues</h3>
  <div class="row">
    <div class="col-md-3">
    <img src="e5c.png" alt="picture" title="a picture of myself" width="100%"    > 
        
    </div>
    <div class="col-md-4"> 
        
      
      <p>Student Number: 2019146</p>
      <p>Course: Bsc Science in Information Technology</p>
      <p>College: CCT College Dublin</p>
      <p>Subject: Web Development</p>
      <p>CA Title: PHP Project 1</p>
    </div>

  </div>
</div>



</body>
</html>






<!-- including footer php -->
<?php include('include/footer.php');?>
