<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/adminlogin.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Admin login</title>
</head>
<body id="body-color">
    <div id="login">
        
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info" >Admin Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info text-success"><i class="fa fa-envelope-o"></i> Email:</label><br> 
                            
                                <input type="email" name="email" id="username" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info"> <i class="fa fa-eye-slash"></i>Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <!-- <label for="remember-me" class="text-info"><span><input id="remember-me" name="remember-me" type="checkbox"></span> <span>Remember me</span></label><br><br> -->
                                <button type="submit" class="btn btn-info">Login</button> &nbsp;
                                <!-- <a href="#" class="text-info">Forgot Password</a>
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="#" class="text-info">Forgot Password</a>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>