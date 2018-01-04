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

    <link rel="stylesheet" href="./Style/StudentResourcesStylesheet.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>


    <title>Student Resources</title>
</head>

<body>
    <div class="container-fluid">

        <div class="TopBorder row align-items-center">
            <div class="col-sm-2">
                <img class="logo" src="Images/BCIT%20Logo.png" alt="logo">
            </div>
            <div class="col-sm-10" id="title">
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
                                <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
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

        <div class="mainContent row">
            <div class="element col-md-4">
                <div class="row">
                    <div class="col">
                        <p>
                            <p class="centerText">
                                <span class="elementTitle">BCIT Student Association</span>
                            BCITSA is an autonomous student-led organization working to support and bolster all BCIT students. BCITSA offers services and development programming to help our students navigate through the BCIT student experience. We are working to ensure that there is value for all BCIT students in every service we provide.
                            <br><br>
                        <a href="www.bcitsa.ca"><img class="BCITSALogo" src="Images/BCITSA.png" alt="BCITSA"></a>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="centerText">
                            <span class="elementTitle">IT Services</span><br><br>
                        </p>
                        <a href="http://www.bcit.ca/techhelp/">Technology Service Desk</a>
                        <br>Having a technology problem or have a question?
                        <ul>
                            <li>Create a request on our <a href="https://techhelp.bcit.ca/CherwellPortal/Home">Self Service</a></li>
                            <li>Search our <a href="http://kb.bcit.ca/">Knowledge Base</a></li>
                        </ul>
                        <br> Need Lab information? Check out <a href="http://www.bcit.ca/its/student/">lab locations, lab software and tips on working in computer labs.</a>
                        <br><br> If you need additional support contact us:
                        <ul>
                            <li>Phone: <a href="tel:604-412-7444">604-412-7444</a> or toll-free (Canada and US only) at <a href="tel:800-351-5533">800-351-5533</a></li>
                            <li>Email: <a href="mailto:techhelp@bcit.ca">techhelp@bcit.ca</a></li>
                            <li>In person: SE12-205 Burnaby Campus</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="centerText">
                            <span class="elementTitle">Campus Career Services</span></p>Looking for Work?
                        <br><br>
                        <a href="http://www.bcit.ca/ses/">eJobs</a>
                        <br><br> Register to receive targeted job postings by email, access BCIT's online job board to review all postings, or upload your resume for employers to see.
                        <ul>
                            <li>Phone:<a href="tel:604-432-8666">604-432-8666</a></li>
                            <li>Email:<a href="mailto:employment@bcit.ca">employment@bcit.ca</a></li>
                            <li>In person: SW1-1022 Burnaby Campus</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="element col-md-4">
                <div class="row">
                    <div class="col">
                        <p class="centerText">
                            <span class="elementTitle">BookStore</span></p>
                        <a href="http://www.bcit.ca/bookstore/">Buy Textbooks</a>
                        <br><br>
                        <a href="https://www.bcit.ca/bookstore/hours.shtml">Check Hours</a>
                        <br>
                        <a href="https://www.apple.com/ca_edu_5003563/shop"><img class="img img-responsive" src="Images/bookstore_apple_ad.svg"></a>
                        <br><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <p class="centerText">
                                <span class="elementTitle">Find Courses and Programs</span></p>
                            <form action=<?php echo 'https://www.bcit.ca/search/?q='.$useTerm.'&site=bcit'; ?> method="GET">
                                <input type="text" name="q" class="form-control" placeholder="Enter Terms">
                                <br>
                                <button type="submit" class="btn btn-primary" value="Search">Search</button>
                                <?php 
                                    if (isset($_GET['searchWords'])){
                                        $searchWords = $_GET['searchWords'];
                                        $useTerm = 'https://www.bcit.ca/search/?q='.$searchWords.'&site=bcit';
                                        
                                    }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="centerText">
                            <span class="elementTitle">Apprentice Orientation</span></p>
                        Good plans go a long way towards the success of any project, including your experience at BCIT. The Apprentice Orientation website is your blueprint for success. Learn about all the resources available to you including:
                        <ul>
                            <li>Financial Planning</li>
                            <li>Housing</li>
                            <li>Recreation</li>
                            <li>Counselling</li>
                            <li>Tutoring</li>
                            <li>and more!</li>
                        </ul>
                        <p class="centerText">
                            <a href="http://www.bcit.ca/apprenticeorientation/">Visit the Apprentice Web-Orientation</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="element col-md-4">
                <div class="row">
                    <div class="col">
                        <p class="centerText">
                            <span class="elementTitle">Campus Services for Students</span>
                        </p>
                        <ul>
                            <li>Aboriginal Services</li>
                            <li>Applied Research Liaison Office</li>
                            <li>Ask An Advisor</li>
                            <li>AudioVisual Services</li>
                            <li>BCIT Contacts</li>
                            <li>BCIT ID Card</li>
                            <li>BCIT Student Association</li>
                            <li>BCIT Student Innovation Challenge</li>
                            <li>Bookstore</li>
                            <li>Campus Tours</li>
                            <li>Counselling Services</li>
                            <li>Disability Resource Centre (DRC)</li>
                            <li>Distance Education</li>
                            <li>Employment Services</li>
                            <li>Food Services</li>
                            <li>Harassment & Discrimination</li>
                            <li>Health Services</li>
                            <li>Housing</li>
                            <li>Information Access and Privacy</li>
                            <li>Institute Policies & Procedures</li>
                            <li>International Education</li>
                            <li>IT Services</li>
                            <li>Learning and Teaching Centre</li>
                            <li>Learning Commons</li>
                            <li>Library</li>
                            <li>MediaWorks</li>
                            <li>Medical Services</li>
                            <li>Parking</li>
                            <li>Program Advising</li>
                            <li>Recreation & Athletics</li>
                            <li>Registration</li>
                            <li>Safety & Security</li>
                            <li>Student Financial Aid & Awards</li>
                            <li>Student Judicial Affairs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    <div class="footer row align-items-center">
        <div class="col-sm-1">
            <a href="http://my.bcit.ca">
                <img class="homeLogo" src="Images/Home%20Logo.png" alt="home">
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>

</html>
