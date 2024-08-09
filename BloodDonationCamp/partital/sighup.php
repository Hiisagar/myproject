<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon"
    href="https://static.vecteezy.com/system/resources/previews/027/791/723/original/medical-hospital-plus-sign-hospital-plus-sign-vector.jpg"
    type="image/x-icon" />
    <title>Sighup Application</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gupter:wght@400;500;700&family=Hachi+Maru+Pop&family=Mochiy+Pop+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: "Ubuntu", sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-image: url('sighup-bg.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: 99vw;
            background-position: center;
        }
        .container{
            border: 2px solid black;
            height: 400px;
            width: 400px;
            margin: auto;
            margin-top: 100px;
            background-color: rgba(0, 0, 0, 0.5);
            border: 2px solid rgba(255, 255, 255, 0.3);
            box-shadow: 2px 2px 15px rgba(0, 0, 0, 0.3);
            color: white;
            border-radius: 10px;
        }
        .second-col{
           display:flex;
           flex-direction: row;
           justify-content: center;
            align-items: center;
        }
        .col{
            margin-top:10px ;
            padding: 10px;
        }
        #name,#email,#password,#cpassword{
            width: 300px;
            padding: 5px;
            border-radius:8px;
           
        }
        #sbt{
            width: 320px;
            padding: 5px;
            border-radius:8px;
            background-color: rgba(250, 100, 0, 0.8);
            color: white;
        }
        .first-col {
            text-align: center;
            margin-top: 20px;
        }
        .message{
            color: rgb(255, 0, 0);
            font-weight: bold;
            font-size: 12pt;
        }
        .greenMessage{
            color: rgb(9, 255, 0);
            font-weight: bold;
            font-size: 12pt;
        }
       
     
    </style>
</head>

<body>
    <div class="container">
        <div class="first-col">
            <h1>SighUp Form</h1>
        </div>
        <div class="second-col">
            <form action="" method="post">
                <div id="first-row" class="col">
                    
                    <input type="text" name="name" id="name" class="field" placeholder="Enter the name here...">
                </div>
                <div id="sec-row" class="col">
                    
                    <input type="email" placeholder="Enter the email here..." name="email" id="email" class="field">
                </div>
                <div id="third-row" class="col">
                   
                    <input type="password" placeholder="Enter the password here..." name="password" id="password" class="field">
                </div>
                <div id="fourth-row" class="col">
                    
                    <input type="password" placeholder="Enter the Confirm password here.."name="cpassword" id="cpassword" class="field">
                    <p id="p" class="message"></p>
                </div>
                <div id="fifth-row" class="col">
                    <input type="submit" name="Sighup" id="sbt"value="SighUp" onclick="btn()">
                </div>
            </form>
        </div>
        <?php
        if(isset($_REQUEST['name']) && isset($_REQUEST['password']) && isset($_REQUEST['email']) && isset($_REQUEST['cpassword']) && !empty($_REQUEST['name']) && !empty($_REQUEST['email']) && !empty($_REQUEST['password']) && !empty($_REQUEST['cpassword'])){
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $password=$_REQUEST['password'];
        $cpassword=$_REQUEST['cpassword'];
        include 'dbconnect.php';
        if($password==$cpassword){
            $encrpt=password_hash($password,PASSWORD_DEFAULT);
            $insertquery="INSERT INTO `donor_profile` (`Donor_Name`, `Donor_Email-Id`, `Donor-Password`) VALUES ('$name', '$email', '$encrpt')";
            $rnquery=mysqli_query($connected,$insertquery);
            header("location: http://localhost/learnphp/BloodDonationCamp/homepage.php?message=true");

        }
    }
        
        ?>
    </div>
    <script>
        function btn(){
            var password=document.getElementById("password").value;
            var cpassword=document.getElementById("cpassword").value;
            if(password!=cpassword){
                document.getElementById("p").classList.add("message")
                document.getElementById("p").innerText="Password are not Match"
            }else{
                if(password==cpassword){
                    document.getElementById("p").classList.remove("message");
                    document.getElementById("p").innerText="Password are match";
                    document.getElementById("p").classList.add("greenMessage");
                }else{
                    document.getElementById("p").innerText="";
                }
                
            }
        }
        btn();
    </script>
</body>

</html>