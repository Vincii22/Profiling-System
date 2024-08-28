<!DOCTYPE html>
<html lang="en">
<head>
    <title>BARANGAY TULA TULA LEGAZPI CITY</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS from CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    
    <style type="text/css">
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .navbar {
            background-color: #f44336;
            border: none;
            border-radius: 0;
            margin-bottom: 0;
            display: flex;
            justify-content: center;
            padding: 0;
            position: relative;
        }

        .navbar .container {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            position: relative;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: #fff !important;
            margin: 0;
        }

        .navbar img {
            height: 55px;
            position: absolute;
            left: 15px;
        }

        #sidelogin {
            width: 30%;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            background-color: #ffffff;
            border: 1px solid #e7e7e7;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            margin-top: 10vh;
        }

        .panel-primary {
            border-color: #d35400;
        }

        .panel-primary>.panel-heading {
            border-color: black;
            color: black;
        }

        .panel-title {
            font-size: 28px;
            font-weight: bold;
        }

        .form-group label {
            font-size: 16px;
            font-weight: bold;
        }

        .form-control {
            font-size: 16px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ced4da;
        }

        .btn-custom {
            background-color: #2980b9;
            border-color: #2980b9;
            font-size: 18px;
            padding: 10px;
            color: #fff;
            border-radius: 5px;
        }

        .btn-custom:hover {
            background-color: #1f5c89;
            border-color: #1f5c89;
        }

        .signup-link a {
            color: #2980b9;
            font-weight: bold;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }

        #footer {
            text-align: center;
            padding: 20px;
            background-color: #f44336;
            color: #fff;
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        .footer-title {
            font-size: 14px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <img src="" alt="Logo" />
            <span class="navbar-brand">BARANGAY 12 TULA-TULA</span>
        </div>
    </nav>
    
    <div id="top" class="login">
        <div id="sidelogin">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <center><h1 class="panel-title">Administrator</h1></center>
                </div>
                <div class="panel-body">
                    <form enctype="multipart/form-data" action="login_query.php" role="form" method="POST">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input class="form-control" name="admin_user" placeholder="Username" type="text" required="required">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" name="admin_pass" placeholder="Password" type="password" required="required">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-block btn-custom" name="login"><span class="glyphicon glyphicon-log-in"></span> Login</button>
                        </div>
                        <div class="form-group signup-link">
                            <a href="signup.php">Don't have an account? Sign up here</a>
                        </div>
                    </form>
                </div>
            </div>    
        </div>
    </div>

    <div id="footer">
        <label class="footer-title">&copy; Copyright BARANGAY 12 TULA-TULA</label>
    </div>

    <!-- jQuery and Bootstrap JS from CDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            function disableBack() { window.history.forward() }

            window.onload = disableBack();
            window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
        });
    </script>
</body>
</html>
