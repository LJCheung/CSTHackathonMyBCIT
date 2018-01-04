<?php
session_start();
$loginError = $_GET['message'];
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


        <title>Login</title>
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

            <div class="container content">

                <div class="login">
                    <form action="authenticate.php" method="post">
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label class="col-form-label" for="studentID">Student ID:</label>
                                <input type="text" name="studentID" class="form-control" id="studentID" placeholder="Student ID">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label class="col-form-label" for="password">Password:</label>
                                <input type="text" name="password" class="form-control" id="password" placeholder="Password">
                            </div>

                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-secondary">Submit</button>
                            </div>
                        </div>
                    </form>
                    <div class="col-sm-6">
                        <span class="message">
                            <?php echo $loginError ?>
                        </span>
                    </div>
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