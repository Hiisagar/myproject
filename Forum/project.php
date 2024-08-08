<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to बातचीत form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
  </head>
  <body>
    <?php
    require 'partital/_navBar.php';
    //it is message for successfully login.
    if(isset($_GET['loginmessage'])){
    if($_GET['loginmessage']=="true"){
        echo("<div class='alert alert-success alert-dismissible fade show' role='alert'>
              <strong>Welcome</strong> You are successfully login in this forum.
              <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>");
    }}
    //it is message for email has already exit
    if(isset($_GET['errormessage'])){
    if($_GET['errormessage']=="true"){
      echo("<div class='alert alert-danger alert-dismissible fade show' role='alert'>
              <strong>Alert!!</strong> User Email has already exit.
              <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>");
    }}
    //it is message for password are not match.
    if(isset($_GET['showpasswordmessage'])){
      if($_GET['showpasswordmessage']=="true"){
        echo("<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Alert!!</strong> Password are not match.
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>");
      }}
      //it is message for invalid password.
      if(isset($_GET['invalidpass'])){
        if($_GET['invalidpass']=="true"){
          echo("<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                  <strong>Alert!!</strong> Invalid Password 
                  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>");
        }
      }
      //it is message for invalid email
      if(isset($_GET['invalidmail'])){
        if($_GET['invalidmail']=="true"){
          echo("<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                  <strong>Alert!!</strong> Invalid Email 
                  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>");
        }
      }









    require 'partital/_imagesliderbg.php';
    ?>

    <?php 
     require 'partital/_dbconnect.php';
       
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>