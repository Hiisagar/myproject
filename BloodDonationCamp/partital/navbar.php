<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blood Donation Camp</title>
    <link rel="icon" href="https://static.vecteezy.com/system/resources/previews/027/791/723/original/medical-hospital-plus-sign-hospital-plus-sign-vector.jpg" type="image/x-icon"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .img {
            width: 500px;
            height: 300px;
        }
    </style>
</head>

<body>
    <!-- navbar start here -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger ">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/learnphp/BloodDonationCamp/homepage.php"> <img
                    src="https://thumbs.dreamstime.com/z/plus-195775914.jpg"
                    alt="hospitial icon" width="30" height="24">Blood Donation Camp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="http://localhost/learnphp/BloodDonationCamp/homepage.php">Home</a>
                    </li>
                    
                    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Blood Bank Login
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="sighup.php">Sighup</a></li>
            <li><a class="dropdown-item" href="login.php">Login</a></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
        </li>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>