<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Donor List</title>
    <link rel="icon"
        href="https://static.vecteezy.com/system/resources/previews/027/791/723/original/medical-hospital-plus-sign-hospital-plus-sign-vector.jpg"
        type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        header {
            position: sticky;
            top: 0px;
        }
    </style>
</head>

<body>
    <header>
        <!-- navbar start here -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger ">
            <div class="container-fluid">
                <a class="navbar-brand" href="http://localhost/learnphp/BloodDonationCamp/homepage.php"> <img
                        src="https://thumbs.dreamstime.com/z/plus-195775914.jpg" alt="Bootstrap" width="30"
                        height="24">Blood Donation Camp</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="http://localhost/learnphp/BloodDonationCamp/homepage.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Looking For Blood
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Blood Availability</a></li>
                                <li><a class="dropdown-item" href="#">Blood Bank Directory</a></li>
                                <li><a class="dropdown-item" href="#">Thalassemia Request</a></li>
                            </ul>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Blood Bank Login
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="Login.php">Login</a></li>
                                <li><a class="dropdown-item" href="sighup.php">Sighup</a></li>
                            </ul>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="http://localhost/learnphp/BloodDonationCamp/partital/aboutus.php#">About us</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn btn-warning" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <?php
    require 'dbconnect.php';
    ?>
    <div class="tables table-success table-striped-columns my-3" style="margin-left:'100px';">
        <table class="table" style="width:70%;">
            <thead>
                <tr>
                    <th scope="col">Sr_NO</th>
                    <th scope="col">Donor_Name</th>
                    <th scope="col">Donor_Gender</th>
                    <th scope="col">Donor_Age</th>
                    <th scope="col">Donor_Phn_number</th>
                    <th scope="col">Father_Name</th>
                    <th scope="col">Mother_Name</th>
                    <th scope="col">Email_Id</th>
                    <th scope="col">Address</th>
                    <th scope="col">Donor_Blood_Group</th>
                    <th scope="col">Location</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //display the data in the table
                $sql="SELECT * FROM `view_donor_list`";
                $rnq=mysqli_query($connected,$sql);
                if(mysqli_num_rows($rnq)>0){
                    echo('<tr>');
                    $num=1;
                while($row=mysqli_fetch_assoc($rnq)){
                echo('
                <th scope="row">'.$num.'</th>
                <th scope="row">'.$row["Donor_Name"].'</th>
                <td>'.$row["Donor_Gender"].'</td>
                <td>'.$row["Donor_Age"].'</td>
                <td>'.$row["Donor_Phn_number"].'</td>
                <td>'.$row["Donor_Father_Name"].'</td>
                <td>'.$row["Donor_Mother_Name"].'</td>
                <td>'.$row["Donor_Email_Id"].'</td>
                <td>'.$row["Donor_Address"].'</td>
                <td>'.$row["Donor_Blood_Group"].'</td>
                <td>'.$row["Donor_Location"].'</td>


                </tr>
        ');
        $num++;
    }
}
                ?>
            </tbody>
        </table>
    </div>
    <?php include 'footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>