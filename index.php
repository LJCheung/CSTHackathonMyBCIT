<?php 
session_start(); 
if (!isset($_SESSION["authenticated"])){
	header("Location: login.php"); 
    die();
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <link rel="stylesheet" href="./Style/stylesheet.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>


    <title>Main Page</title>
</head>

<body>
    <div class="container-fluid">

        <div class="TopBorder row align-items-center">
            <div class="col-sm-2">
                <img class="logo" src="Images/BCIT%20Logo.png" alt="logo">
            </div>
            <div class="col-sm-10">
                MyBCIT
            </div>
        </div>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php">Home<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="studentResources.php">Student Resources</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="campusLife.php">Campus Life</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Email &amp Calendar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Groups</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Help</a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row bg-null">
            <div class="col-xl-3" id="announcements">
                <h5><b>Announcements</b></h5>
                <div class="col-xs-12">
                    <h6><b>Personal Announcements</b></h6>
                </div>
                <div class="col-xs-12">
                    <h6><b>Campus Announcements</b></h6>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="responsive-iframe-container">
                    <div class="visible-lg">
                        <iframe src="https://calendar.google.com/calendar/embed?src=guojuanhan%40gmail.com&ctz=America/Vancouver" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
                    </div>
                    <div class="visible-md">
                        <iframe src="https://calendar.google.com/calendar/embed?src=guojuanhan%40gmail.com&ctz=America/Vancouver" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
                    </div>
                    <div class="visible-sm">
                        <iframe src="https://calendar.google.com/calendar/embed?title=Schedule&amp;mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=guojuanhan%40gmail.com&amp;color=%231B887A&amp;ctz=America%2FVancouver" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
                    </div>
                    <div class="visible-xs">
                        <iframe src="https://calendar.google.com/calendar/embed?title=Schedule&amp;mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=guojuanhan%40gmail.com&amp;color=%231B887A&amp;ctz=America%2FVancouver" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <ul id="onlineservices">
                    <h5><b>Online Self Services</b></h5>
                </ul>
                <li><a href="#" class="service">Update Personal Information</a></li>
                <li><a href="#" class="service">myCommunication</a></li>
                <li><a href="#" class="service">Check Application Status</a></li>
                <li><a href="#" class="service">Check Course Schedule</a></li>
                <li><a href="#" class="service">Order Official Transcript</a></li>
                <li><a href="#" class="service">Tax Forms - T2202A</a></li>
            </div>
        </div>

        <div class="footer row align-items-center">
            <div class="col-sm-1">
                <a href="http://my.bcit.ca">
                    <img src="Images/Home%20Logo.png" alt="home">
                </a>
            </div>
            <div class="col-sm-7 reportIssueLink">
                Problems with this page? Please <a class="reportIssueLink underline" href="https://www.bcit.ca/its/web/feedback.shtml?from=https://www.bcit.ca/facilities/projectservices/policies.shtml">let us know.</a>
            </div>
            <div class="col-sm-2 copyright">
                <a href="https://www.bcit.ca/copyright/">Copyright</a>
            </div>
            <div class="col-sm-2 privacy">
                <a href="https://www.bcit.ca/privacy/">Privacy</a>
            </div>

        </div>



    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>

</html>