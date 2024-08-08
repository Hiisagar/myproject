<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
<?php 
// include '_navBar.php';
include '_dbconnect.php';
if(isset($_REQUEST['sighupEmail'])&& isset($_REQUEST['password'])&& isset($_REQUEST['cpassword'])){
    if(!empty($_REQUEST['sighupEmail'])&& !empty($_REQUEST['password'])&& !empty($_REQUEST['cpassword'])){
$user_email=$_REQUEST['sighupEmail'];
$user_password=$_REQUEST['password'];
$confirm_password=$_REQUEST['cpassword'];
$userEmail=$_REQUEST['userName'];

//check weather email exit or not
$exitUserEmail="SELECT * FROM `userdata` WHERE `user_email`='$user_email'";
$res=mysqli_query($conn,$exitUserEmail);
$num=mysqli_num_rows($res);
if($num>0){
   header("location:http://localhost/learnphp/Forum/project.php?errormessage=true");

}
else{
    if($user_password==$confirm_password){
        $encryp_password=password_hash($user_password,PASSWORD_DEFAULT);
        $insertsql="INSERT INTO `userdata` (`user_name`,`user_email`, `user_password`) VALUES ('$userEmail','$user_email','$encryp_password')";
        $runcommand=mysqli_query($conn,$insertsql);
        if($runcommand){
        header("location:http://localhost/learnphp/Forum/project.php?loginmessage=true");

        };
    }
    else{
        header("location:http://localhost/learnphp/Forum/project.php?showpasswordmessage=true");
    };
}
}
}



?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>