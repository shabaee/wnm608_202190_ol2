<?php
session_start(); // Start the session

// Include necessary functions and configurations
include_once "lib/php/functions.php";

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    // Retrieve the 'id' parameter from the URL
    $product_id = $_GET['id'];

    // Add the product to the cart
    addToCart($product_id, 1); // Assuming quantity is 1 for each product

    // Redirect the user to the confirmation page
    header("Location: confirmation_page.php");
    exit; // Ensure that no further code is executed after the redirection
} else {
    // Handle the case where the 'id' parameter is not set
    // Redirect the user to an error page or another appropriate destination
    header("Location: error_page.php");
    exit; // Ensure that no further code is executed after the redirection
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Confirmation Page</title>  

    <?php include "parts/meta.php"; ?>
    <?php include "parts/css.php";?>

</head>
<body>

    <?php include "parts/navbar.php"; ?>

     <!-- Cart-->  
<div class="container_products">
    <h2 class="title"> You added <?= $product->name ?> to your cart </h2>
    <p>There are now <?= $cart_product->amount ?> of  <?=$product->name ?> in your cart. </p>

    <div class="grid gap">
        <div class="col-xs-12 col-md-5">
            <div class="flex-none"> <a href="product_list.php">Continue Shopping</a></div>
        </div>
        <div class="col-xs-12 col-md-5">
            <div class="flex-none"> <a href="product_cart.php">Go To Cart</a></div>
        </div>
    </div>
</div>
    

</body>
</html>