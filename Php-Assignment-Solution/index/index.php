<?php
	if(isset($_SESSION["email_id"])){
		header("location: products.php");
	}
	include "../includes/common.php";
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
        <div class="content">
            <div class="banner-image">
                <div class="inner-banner-image">
                    <div class="banner_content">   
                        <h1>We sell lifestyle</h1>
                        <p>Flat 40% OFF on premium brands</p>
                        <a href="products.php" class="btn btn-danger btn-lg active"> Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container"> 
            <div class="items">   
                <a href="products.php">
                    <img src="../img/1.jpg" alt="camera" class="thumbnail">
                    <div class="caption">
                        <h2>Cameras</h2> 
                        <p>Choose among the best available in the world.</p>
                    </div>
                </a>
            </div>
            <div class="items">   
                <a href="products.php">
                    <img src="../img/7.jpg" alt="watch" class="thumbnail">
                    <div class="caption">
                        <h2>Watches</h2> 
                        <p>Original Watches from the best brands.</p>
                    </div>
                </a>
            </div>
            <div class="items">   
                <a href="products.php">
                    <img src="../img/8.jpg" alt="shirt" class="thumbnail">
                    <div class="caption">
                        <h2>Shirts</h2> 
                        <p>Our exquisite collection of shirts</p>
                    </div>
                </a>
            </div>
        </div>
      
<?php include "../includes/footer.php"; ?>
    </body> 
    </html>