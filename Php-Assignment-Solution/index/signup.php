<?php include "../includes/common.php"; ?>
<?php
	if(isset($_SESSION["id"])){
		header("location: products.php");
	}
?>
<!DOCTYPE HTML>
<html>
    <head>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sign Up</title>
        
        <link href="../css/index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
      
<?php include "../includes/header.php"; ?>
        <div class="container head-padding">
            <div class="row">
                <div class="col-xs-offset-4 col-xs-4">
                    <h1> SIGN UP </h1>
                    <form method="post" action="signup_script.php">
                        <div class="form-group">
                            <input type="text"  class="form-control" name="name"  placeholder="Name" >
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" name="email"  placeholder="E-mail" >
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" name="contact" placeholder="Contact">
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" name="city"  placeholder="City" >
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" name="address" placeholder="Address">
                        </div>
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </form>
                    <br>
                <div class="panel-footer">
					Already have an account? <a href="login.php">Click here</a> to Login.
				</div>
                </div>
            </div>
        </div>
       
<?php include "../includes/footer.php"; ?>

    </body>
</html>