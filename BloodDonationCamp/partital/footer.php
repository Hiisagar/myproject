<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        footer{
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
            margin: 5px 0px;
        }

        .copyrights {
            display: flex;
            justify-content: space-evenly;
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
        #logout{
            text-decoration:none;
            color:white;
        }
    </style>
</head>

<body>
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
                    <li id="li-id"><a href="http://localhost/learnphp/BloodDonationCamp/partital/aboutus.php" id="logout">Donation Login</a></li>
                    <li id="li-id">About Blood Donation</li>
                    <li id="li-id">Join us</li>
                </ul>
            </div>
            <div class="third">
                <ul>
                    <li id="li-id">
                        <h3>Login</h3>
                    </li>
                    <li id="li-id">Blood Bank Login</li>
                    <li id="li-id">Add your Blood Bank</li>
                    <li id="li-id"><a href="http://localhost/learnphp/BloodDonationCamp/partital/logout.php" id="logout">Logout</a></li>
                </ul>
            </div>
            <div class="fourth">
                <ul>
                    <li id="li-id">
                        <h3>About us</h3>
                    </li>
                    <li id="li-id"><a href="http://localhost/learnphp/BloodDonationCamp/partital/aboutus.php" id="logout">About Blood Bank</a</li>
                    <li id="li-id">Your Doctor</li>
                    <li id="li-id">Image Gallery</li>
                    <li id="li-id">Contact us</li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <div class="copyrights">
                <p>© 2016 -2024 by Ministry of Health and Family Welfare</p>
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