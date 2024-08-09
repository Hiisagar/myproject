<?php
 session_start();

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blood Donation Camp</title>
    <link rel="icon"
        href="https://static.vecteezy.com/system/resources/previews/027/791/723/original/medical-hospital-plus-sign-hospital-plus-sign-vector.jpg"
        type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .img {
            width: 500px;
            height: 300px;
        }

        body {
            background: rgb(0, 36, 35);
            background: linear-gradient(338deg, rgba(0, 36, 35, 1) 0%, rgba(9, 9, 121, 1) 48%, rgba(0, 255, 91, 1) 100%);
        }
    </style>
</head>

<body>
    <!-- navbar start here -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger ">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/learnphp/BloodDonationCamp/homepage.php"> <img
                    src="https://thumbs.dreamstime.com/z/plus-195775914.jpg" alt="hospitial icon" width="30"
                    height="24">Blood Donation Camp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><?php 
                        if(isset($_SESSION['name'])){
                            echo("Welcome".$_SESSION['name']);
                        }
                        ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="http://localhost/learnphp/BloodDonationCamp/homepage.php">Home</a>
                    </li>
                    <?php 
                       echo('
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="partital/viewdonorlist.php">View Donor
                            Detail</a>
                    </li>  ');
                    ?>
                     <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Blood Bank Login
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="partital/Login.php">Login</a></li>
                                <li><a class="dropdown-item" href="partital/sighup.php">Sighup</a></li>
                                <li><a class="dropdown-item" href="partital/logout.php">Logout</a></li>

                            </ul>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/learnphp/BloodDonationCamp/partital/aboutus.php">About us</a>
                    </li>
                 
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn btn-warning" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php
    if($_SERVER['REQUEST_METHOD']=$_POST){
    $name=$_REQUEST['name'];
    $gender=$_REQUEST['gender'];
    $date=$_REQUEST['date'];
    $age=$_REQUEST['age'];
    $fname=$_REQUEST['fname'];
    $mname=$_REQUEST['mname'];
    $email=$_REQUEST['email'];
    $phnnum=$_REQUEST['phnnum'];
    $address=$_REQUEST['address'];   
    $bldgrp=$_REQUEST['bldgrp'];
    $dnadd=$_REQUEST['dnadd'];
     //conncected to the database
  $server_host="localhost";
  $server_name="root";
  $server_password="";
  $dbBase_name="blood_donation_camp";
  //connect to the database
  $connected=mysqli_connect($server_host,$server_name,$server_password,$dbBase_name);
    $sql="INSERT INTO `view_donor_list` (`Donor_Name`, `Donor_Gender`, `Donor_Age`, `Donor_Phn_number`, `Donor_Father_Name`, `Donor_Mother_Name`, `Donor_Email_Id`, `Donor_Address`, `Donor_Blood_Group`, `Date`, `Donor_Location`) VALUES (' $name', ' $gender', '$age', '$phnnum', '$fname', ' $mname', '$email', '$address', '$bldgrp', current_timestamp(), '$dnadd')";
    $rnquery=mysqli_query($connected,$sql);
    }
    ?>
    </div>
    <main>
        <div>
            <marquee direction="left" loop="3" bgcolor="yellow">
                <h2 class="text-danger-emphasis my-2">WELCOME TO BLOOD DONATION CAMP</h2>
            </marquee>
            <?php 
            if(isset($_REQUEST['message'])){
                echo('<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Success!!!</strong>Your are Successfully Sighup your profile.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
            }
            
            
            
            ?>
        </div>
        <div class="my-3" style="text-align: center;">
            <h1 class="text-danger">ONLINE BLOOD DONATION CAMP</h1>
        </div>
        <div style="text-align: center;">
            <img class="img"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkLRF-ObkGiT1QQ5MMNJLlkFcYLqQKyD37yQ&s"
                alt="blood donation camp">
        </div>
        <div class="my-3" style="text-align: center;">
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#regModal">Registration
                Form</button>
        </div>
    </main>
    <!-- Modal -->
    <div class="modal fade" id="regModal" tabindex="-1" aria-labelledby="regModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="regModalLabel">Registration Form</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="homepage.php" method="post">
                        <label for="Name of the Donor">Name of the Donor</label>
                        <input type="text" name="name" placeholder="enter the name here"><br><br>
                        <label for="Gender">Gender</label>
                        <input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="Female">Female
                        <input type="radio" name="gender" value="other">other
                        <br><br>
                        <label for="D.O.B">D.O.B </label><input type="date" name="date"><br><br>
                        <label for="Age">Age</label> <input type="text" name="age" placeholder="enter your age"><br><br>
                        <label for="Father Name">Father Name</label><input type="text" name="fname"
                            placeholder="enter your father name"><br><br>
                        <label for="Mother Name">Mother Name</label><input type="text" name="mname"
                            placeholder="enter your mother name"><br><br>
                        <label for="email">Email-id</label><input type="email" name="email" id=""
                            placeholder="enter your email-id"><br><br>
                        <label for="Phn number">Phone Number</label><input type="text" name="phnnum" id=""
                            placeholder="enter your phn number"><br><br>
                        <label for="address">Address</label><input type="text" name="address"
                            placeholder="enter your address here"><br><br>
                        <label for="Blood Group">Blood Group</label>
                        <select name="bldgrp">
                            <option value="None" selected>None</option>
                            <option value="A+">A Positive</option>
                            <option value="A-">A Negitive</option>
                            <option value="B+">B Positive</option>
                            <option value="B-">B Negitive</option>
                            <option value="O+">O Positive</option>
                            <option value="O-">O Negitive</option>
                            <option value="AB+">AB Positive</option>
                            <option value="AB-">AB Negitive</option>
                        </select>
                        <br><br>
                        <label for="Donor Address">Donor Address</label>
                        <select name="dnadd">
                            <option value="None" selected>None</option>
                            <option value="Haryana">Harayana</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Kolkata">Kolkata</option>
                            <option value="Patiyala">Patiyala</option>
                            <option value="Chandigarh">Chandigarh</option>
                            <option value="Kurkshetra">Kurkshetra</option>
                            <option value="Rohtak">Rohtak"</option>
                            <option value="kernal">kernal</option>
                            <option value="Punchkula">Punchkula</option>
                            <option value="Saha">Saha</option>
                            <option value="Mohali">Mohali</option>
                            <option value="Derra Bassi">Derra Bassi</option>
                        </select>
                        <br><br>
                        <input class="btn btn-primary" type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'partital/footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>