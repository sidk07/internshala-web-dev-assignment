<?php include "../includes/common.php"; ?>

<!DOCTYPE HTML>
<html>
    <head>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart</title>
       
        <link href="../css/index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
       
<?php include "../includes/header.php"; ?>
<?php
            require './includes/header.php';

            $user_id = $_SESSION["id"];
            $query = "SELECT item_id FROM users_items WHERE user_id = '$user_id'";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            
            while($row = mysqli_fetch_array($result)){
                $item_id = $row["item_id"];
                $query1 = "UPDATE users_items SET status = 'Confirmed' WHERE item_id = '$item_id'";
                
                $result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
            }
        ?>
        <div class="container head-padding">
            <div class="row"> 
                <h3><center> Your order is confirmed. Thank you for shopping with us. <a href="products.php">Click here</a> to purchase any other item.</center></h3>
            </div>
        </div>
       
<?php include "../includes/footer.php"; ?>
    </body>
</html>