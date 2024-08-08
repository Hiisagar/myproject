<?php  
include '_dbconnect.php';
if(isset($_REQUEST['login']) && isset($_REQUEST['password'])){

//initalize some variable
$login=$_REQUEST['login'];
$password=$_REQUEST['password'];
//echo("your login acccount is=" .$login."your password is=".$password);
$checkdata="SELECT * FROM `userdata` WHERE `user_email`='$login'";
$runquery=mysqli_query($conn,$checkdata);//run command
//$num=mysqli_num_rows($runquery);
if($runquery)
{
    $rows=mysqli_fetch_assoc($runquery);
    if(password_verify($password,$rows['user_password'])){
        // echo("user login");
        session_start();
        $_SESSION['userEmail']=$login;
        $_SESSION['user_id']=$rows['user_id'];
        header("location:http://localhost/learnphp/Forum/project.php?loginmessage=true");
        exit();
    }
    else{
        header("location:http://localhost/learnphp/Forum/project.php?invalidpass=true");
    }
}  
header("location:http://localhost/learnphp/Forum/project.php?invalidmail=true");
}
?>