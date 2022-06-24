<?php include "../includes/common.php"; ?>
<?php
	if(!isset($_SESSION["email_id"])){
		header("location: index.php");
	}else{
		session_unset();
		session_destroy();
	}
?>
<!DOCTYPE html>
    <head> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lifestyle Store</title>

        <link href="../css/index.css" rel="stylesheet" type="text/css"/> 
    </head> 
    <body> 
 
<?php include "../includes/header.php"; ?>
        <div class="container">
            <div class="row row_style">
                <div class="col-xs-offset-4 col-xs-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>Logged Out Successfully <a href="index.php">Click here</a> to go back to index page.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
<?php include "../includes/footer.php"; ?>
    </body> 
    </html>