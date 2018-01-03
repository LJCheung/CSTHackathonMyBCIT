<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <link rel="stylesheet" href="login.css">

    <title>Login</title>
</head>

<body>
    <nav class="navbar">
        <div class="container-fluid">
        </div>
    </nav>
    <div class="container content">
        <form method="post">
            <div class="form-group row">
                <div class="col-sm-4 text-right col-sm-offset-1">
                    <label class="col-form-label" for="studentID">Student ID:</label>
                </div>
                <div class="col-sm-3">
                    <input type="text" name="email" class="form-control" id="studentID" placeholder="studentID">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4 text-right col-sm-offset-1">
                    <label class="col-form-label" for="password">Password:</label>
                </div>
                <div class="col-sm-3">
                    <input type="text" name="password" class="form-control" id="password" placeholder="Password">
                </div>
            </div>
            <div class="col-sm-4">
                <button type="submit" class="btn btn-secondary">Submit</button>
            </div>
        </form>
        <div class="col-sm-12 col-sm-offset-5 text-left">
            <span class="message">
                <?php echo $loginError ?>
            </span>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>

</html>
