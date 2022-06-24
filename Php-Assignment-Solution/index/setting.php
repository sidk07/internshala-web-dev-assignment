<?php include "../includes/common.php"; ?>
<?php
	
	if(!isset($_SESSION["email_id"])){
		header("location: index.php");
	}
?>
<!DOCTYPE HTML>
<html>
    <head>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Settings</title>
       
        <link href="../css/index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
       
<?php include "../includes/header.php"; ?>
        <div class="container head-padding">
            <div class="row">
                <div class="col-xs-offset-4 col-xs-4">
                    <h1> Change Password</h1>
                    <form>
                        <div class="form-group">
                            <input type="text"  class="form-control" name="old-password"  placeholder="Old Password" >
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" name="new-password"  placeholder="New Password" >
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" name="new-password" placeholder="Re-type New Password">
                        </div>
                        <button class="btn btn-primary">Change</button>
                    </form>
                </div>
            </div>
        </div>

<?php include "../includes/footer.php"; ?>
    </body>
</html>