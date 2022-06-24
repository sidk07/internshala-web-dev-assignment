<?php include "../includes/common.php"; ?>
<!DOCTYPE HTML>
<html>
    <head>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products</title>
      
        <link href="../css/index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
       
<?php include "../includes/header.php"; ?>
<?php include "../includes/check-if-added.php"; ?>
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we
                    have all in one place.</p>
            </div>
<!-- Camera -->
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="../img/5.jpg" alt="Cannon EOS">
                        <div class="caption">
                            <center>
                            <h3>Cannon EOS</h3>
                            <p>Price:Rs.36000.00</p>
                        </center>
                           <!-- <button class="btn btn-primary btn-block">Add to cart</button> -->
                           <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(1)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=1" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                        </div>
                    </div> 
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="../img/2.jpg" alt="Sony DSLR">
                        <div class="caption">
                            <center>
                            <h3>Sony DSLR</h3>
                            <p>Price:Rs.40000.00</p>
                        </center>
                            <!-- <button class="btn btn-primary btn-block">Add to cart</button> -->
                            <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(2)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=2" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="../img/3.jpg" alt="Sony DSLR">
                        <div class="caption">
                            <center>
                            <h3>Sony DSLR</h3>
                            <p>Price:Rs.40000.00</p>
                        </center>
                            <!-- <button class="btn btn-primary btn-block">Add to cart</button> -->
                            <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(3)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=3" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                        </div>
                    </div> 
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="../img/4.jpg" alt="Olympus DSLR">
                        <div class="caption">
                            <center>
                            <h3>Olympus DSLR</h3>
                            <p>Price:Rs.80000.00</p>
                        </center>
                           <!-- <button class="btn btn-primary btn-block">Add to cart</button> -->
                           <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(4)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=4" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                        </div>
                    </div>
                </div>
            </div>
<!-- Watches-->
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="../img/9.jpg" alt="Titan Model #301">
                        <div class="caption">
                            <center>
                            <h3>Titan Model #301</h3>
                            <p>Price:Rs.13000.00</p>
                        </center>
                            <!-- <button class="btn btn-primary btn-block">Add to cart</button> -->
                            <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(5)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=5" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                        </div>
                    </div> 
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="../img/10.jpg" alt="Titan Model #201">
                        <div class="caption">
                            <center>
                            <h3>Titan Model #201</h3>
                            <p>Price:Rs.3000.00</p>
                        </center>
                            <!-- <button class="btn btn-primary btn-block">Add to cart</button> -->
                            <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(6)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=6" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="../img/11.jpg" alt="HMT Milan">
                        <div class="caption">
                            <center>
                            <h3>HMT Milan</h3>
                            <p>Price:Rs.8000.00</p>
                        </center>
                           <!-- <button class="btn btn-primary btn-block">Add to cart</button> -->
                           <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(7)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=7" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                        </div>
                    </div> 
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="../img/12.jpg" alt="Faber Luba #111">
                        <div class="caption">
                            <center>
                            <h3>Faber Luba #111</h3>
                            <p>Price:Rs.18000.00</p>
                        </center>
                            <!-- <button class="btn btn-primary btn-block">Add to cart</button> -->
                            <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(8)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=8" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                        </div>
                    </div>
                </div>
            </div>
<!--Shirts-->
            <div class="row div-padding">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="../img/8.jpg" alt="H&W">
                        <div class="caption">
                            <center>
                            <h3>H&W</h3>
                            <p>Price:Rs.800.00</p>
                        </center>
                            <!-- <button class="btn btn-primary btn-block">Add to cart</button> -->
                        
                            <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(9)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=9" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?></div>
                    </div> 
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail ">
                        <img src="../img/6.jpg" alt="Luis Phil">
                        <div class="caption">
                            <center>
                            <h3>Luis Phil</h3>
                            <p>Price:Rs.1000.00</p>
                        </center>
                           <!-- <button class="btn btn-primary btn-block">Add to cart</button> -->
                           <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(10)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=10" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="../img/13.jpg" alt="John Zok">
                        <div class="caption">
                            <center>
                            <h3>John Zok</h3>
                            <p>Price:Rs.1500.00</p>
                        </center>
                            <!-- <button class="btn btn-primary btn-block">Add to cart</button> -->
                            <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(11)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=11" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                        </div>
                    </div> 
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="../img/14.jpg" alt="Jhalsani">
                        <div class="caption">
                            <center>
                            <h3>Jhalsani</h3>
                            <p>Price:Rs.1300.00</p>
                        </center>
                            <!-- <button class="btn btn-primary btn-block">Add to cart</button> -->
                            <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(12)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=12" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
<?php
			include "../includes/footer.php";
		?>
    </body>
</html>