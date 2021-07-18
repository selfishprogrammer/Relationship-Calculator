<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Love Calculator</title>
  </head>
  <body style="background-image: url(back.webp); background-size: 100%,100% ; background-repeat: no-repeat;">
   
    <div class="container">
                    
        <div class="col-md-6 offset-md-3">
                    
            <div class="shadow-sm border p-4" style="margin-top: 150px;">
                <div class="card-footer text-center border mb-3" style="background-color: red">LOVE CALCULATOR</div>
                    <form class="m-2" method="post" action="<?php $_SERVER['REQUEST_URI'] ?>">
<div class="d-flex justify-content-center m-2">
<div class="form-group mt-2">
    
<select class="form-control" name="relationship" required>
    <option value="" selected>--Select Relation--</option>


  <option value="Lover">Lover</option>
    <option value="Sister">Sister</option>
        <option value="Brother">Brother</option>
                <option value="Mother">Mother</option>
                                <option value="Father">Father</option>
                                                <option value="Daughter">Son/Daughter</option>
                                                <option value="Family">Other Family Members</option>





</select>

</div>
</div>
               <div class="d-flex justify-content-between">

<div class="form-group mt-2">
    
<input type="text" placeholder="Your Name" id="your_name" class="form-control " required>

</div>

<div class="form-group mt-2">
    
<img src="love_back.png" class="mx-4" width="40" height="40">
</div>

<div class="form-group mt-2">
    
<input type="text" placeholder="Your Lover Name" id="your_lover" class="form-control" required>

</div>
</div> 

<div class="form-group mt-2">
     <div class="d-flex justify-content-center">
<button type="button" onclick="love()" class="form-control btn btn-warning mt-4" style="width: 18rem">Check</button>
</div>
</div>


<div class="form-group mt-2">
     <div class="d-flex justify-content-center">
<input type="text" placeholder="Your Love %" id="your_lover_name" class="form-control m-5" disabled="true">
</div>
</div>

</form>
            </div>


        </div>

    </div>


    <?php

if(isset()){}
$conn=mysqli_connect("localhost","root","","relationship_calculator");

$result($conn,"insert into `relation` ");




 ?>

<script>
    function love() {



var a =Math.ceil (Math.random()*100)
document.getElementById('your_lover_name').value=a+"%";
document.getElementById('your_name').value="";
document.getElementById('your_lover').value="";
    }





</script>

    
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>