<?php

include_once "lib/php/functions.php";

// Check if action is set
$action = $_GET['action'] ?? '';

switch ($action) {
    case "add-to-cart":
        // Sanitize input
        $product_id = $_POST['product-id'] ?? '';
        $product_amount = $_POST['product-amount'] ?? '';

        if ($product_id && $product_amount) {
            // Fetch product
            $product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`='$product_id'");
            if ($product) {
                // Add to cart
                addToCart($product_id, $product_amount);
                // Redirect
                header("location: addedtocart.php?id={$product_id}");
                exit; // Always exit after header redirect
            } else {
                die("Product not found");
            }
        } else {
            die("Product ID or amount is missing");
        }
        break;

    case "update-cart-item":
        // Your update logic here
        break;

    case "delete-cart-item":
        // Your delete logic here
        break;

    case "reset-cart":
        resetCart();
        break;

    default:
        die("Incorrect Action");
        break;
}

// Debugging
print_p([$_GET, $_POST, $_SESSION]);
