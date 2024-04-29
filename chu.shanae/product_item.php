<?php
include_once "lib/php/functions.php";

// Sanitize $_GET['id'] input
$id = $_GET['id'] ?? null;
if (!is_numeric($id)) {
    header("location: error.php");
    exit;
}

// Fetch product from the database
$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`='$id'");
if (empty($product)) {
    header("location: error.php");
    exit;
}

// Extract images and generate image elements
$images = explode(",", $product[0]->images);
$image_elements = array_reduce($images, function ($r, $o) {
    return $r . "<img src='/css/img/$o'>";
});

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Item</title>
    <?php include "parts/meta.php"; ?>

    <script src="js/product_thumbs.js"></script>
</head>
<body>

<?php include "parts/navbar.php"; ?>

<div class="container">
    <div class="card flat">
        <div class="grid gap">
            <div class="col-xs-12 col-md-7">
                <div class="card soft">
                    <div class="images-main">
                        <img src="/css/img/<?= $product[0]->thumbnail ?>">
                    </div>
                    <div class="images-thumbs">
                        <?= $image_elements ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-5">
                <form class="card soft flat" method="post" action="cart_actions.php?action=add-to-cart">
                    <!-- Hidden input field for product ID -->
                    <input type="hidden" name="product-id" value="<?= $product->id ?>">
                    <div class="card-section">
                        <h1 class="product-name"><?= $product[0]->name ?></h1>
                        <div class="product-price">&dollar;<?= $product[0]->price ?></div>
                    </div>
                    <div class="card-section">
                        <label for="product-amount" class="form-label">Amount</label>
                        <div class="form-select" id="product-amount">
                            <select id="product-amount" name="product-amount">
                                <?php for ($i = 1; $i <= 10; $i++) : ?>
                                    <option><?= $i ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                    <div class="card-section">
                        <input type="submit" class="default-button" value="Add To Cart" method="post" action="cart_actions.php?action=add-to-cart">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="card soft">
        <p><?= $product[0]->description ?></p>
    </div>
</div>

</body>
</html>
