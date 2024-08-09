<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon"
    href="https://static.vecteezy.com/system/resources/previews/027/791/723/original/medical-hospital-plus-sign-hospital-plus-sign-vector.jpg"
    type="image/x-icon" />
    <title>Login Application</title>
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
            background-image: url('login-bg.jpg');
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
            padding: 10px;
            border-radius:8px;
           
        }
        #sbt{
            width: 300px;
            padding: 5px;
            border-radius:8px;
            background-color: rgba(250, 100, 0, 0.8);
            color: white;
            padding: 10px;
            font-size:12pt;

        }
        .first-col {
            text-align: center;
            margin-top: 20px;
        }
        #blood-icon{
            width: 100px;
            height: 100px;
            position: relative;
            left:110px;
        }
        footer{
            margin-top:70px;
            clear: both;
        }
        .footer {
            background-color: rgb(58, 58, 58);
            color: white;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
           
        }

        .copyright {
            background-color: rgb(58, 58, 58);
            color: white;

        }

        #li-id {
            list-style: none;
            margin: 10px 0px;
        }

        .copyrights {
            display: flex;
            justify-content: space-evenly;
            margin-bottom: 18px;
        }

        .footer-bar ul {
            display: flex;
            gap: 8px;
            justify-content: center;
        }

        .footer-bar ul li {
            list-style: none;
            padding: 0px 8px;
            border-right: 2px solid black;
            margin-bottom: 5px;
        }
        #a{
            text-decoration:none;
            color:white;
        }
    </style>
</head>

<body>
    <?php 
    if($_SERVER['REQUEST-METHOD']=$_POST){
        $name=$_POST['name'];
        $password=$_POST['password'];
        include 'dbconnect.php';
        $selectqry="SELECT * FROM `donor_profile` WHERE `Donor_Name`='$name'";
        $result=mysqli_query($connected,$selectqry);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                if(password_verify($password,$row['Donor-Password'])){
                    session_start();
                    $_SESSION['name']=$name;
                    header("location:http://localhost/learnphp/BloodDonationCamp/homepage.php");
                }
            }
        }

    }
    
    
    ?>
    <div class="container">
        <div class="first-col">
            <h1>Login Form</h1>
        </div>
        <div class="second-col">
            <form action="login.php" method="post">
                <div id="first-row" class="col">
                    
                    <input type="text" name="name" id="name" class="field" placeholder="Enter the name here...">
                </div>
                <div id="third-row" class="col">
                   
                    <input type="password" placeholder="Enter the password here..." name="password" id="password" class="field">
                </div>
                <div id="fifth-row" class="col">
                    <input type="submit" name="Sighup" id="sbt" value="Login">
                </div>
                <img  id="blood-icon"src="blood-icon.png" alt="blood image">
            </form>
        </div>
        <div class="third"></div>
    </div>
    <footer>
        <div class="footer">
            <div class="first">
                <ul>
                    <li id="li-id">
                        <h3>Looking For Blood</h3>
                    </li>
                    <li id="li-id">Blood Availability</li>
                    <li id="li-id">Blood Bank Directory</li>
                    <li id="li-id">Thalassemia Request</li>
                </ul>
            </div>
            <div class="second">
                <ul>
                    <li id="li-id">
                        <h3>Want to Donate Blood</h3>
                    </li>
                    <li id="li-id">Blood Donation Camps</li>
                    <li id="li-id"><a href="http://localhost/learnphp/BloodDonationCamp/partital/Login.php" id="a">Login</a></li>
                    <li id="li-id"><a href="http://localhost/learnphp/BloodDonationCamp/partital/sighup.php" target="_blank" id="a">SighUp</a></li>
                    <li id="li-id">Join us</li>
                </ul>
            </div>
            <div class="third">
                <ul>
                    <li id="li-id">
                        <h3>Homepage</h3>
                    </li>
                    <li id="li-id"><a href="http://localhost/learnphp/BloodDonationCamp/homepage.php" target="_blank" id="a">Home<a></li>
                    <li id="li-id"><a href="http://localhost/learnphp/BloodDonationCamp/partital/viewdonorlist.php" id="a">View Donor List</a></li>
                    <li id="li-id">Logout</li>
                </ul>
            </div>
            <div class="fourth">
                <ul>
                    <li id="li-id">
                        <h3>About us</h3>
                    </li>
                    <li id="li-id">About Blood Bank</li>
                    <li id="li-id">Your Doctor</li>
                    <li id="li-id">Image Gallery</li>
                    <li id="li-id">Contact us</li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <div class="copyrights">
                <p>© 2016 - <?php echo(date('Y')) ?>by Ministry of Health and Family Welfare</p>
                <p>® Designed and Devloped by Centre for Development of Advanced Computing</p>
            </div>
            <div class="footer-bar">
                <ul>
                    <li>Terms & Conditions </li>
                    <li>Privacy Policy</li>
                    <li>Last Updated</li>
                    <li>Aug 06 2024</li>
                    <li>Site</li>
                </ul>
            </div>
        </div>
    </footer>

</body>

</html>