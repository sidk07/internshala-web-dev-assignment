
<?php include "../includes/common.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        
        <link href="../css/index.css" rel="stylesheet" type="text/css"/> 
    </head>
    <body>
       
<?php include "../includes/header.php"; ?>
        <div class="container">
            <div class="row ">
                <div class="col-xs-offset-3 col-xs-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase</p>
                            <form action="login_submit.php" method="post">
                            <div class="form-group">
                                <input type="text"  class="form-control" name="e-mail"  placeholder="E-mail" >
                            </div>
                            <div class="form-group">
                                <input type="text"  class="form-control" name="password" placeholder="Password">
                            </div>
                            <button class="btn btn-primary">Login</button>
                            </form>
                        </div>
                        <div class="panel-footer">Don't have an account? <a href="signup.php">Register</a></div>
                    </div>
                </div>
            </div>
        </div>
       
<?php include "../includes/footer.php"; ?>
    </body>
</html>