<?php
include "lib/php/functions.php";
include "parts/templates.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product List</title>
    <?php include "parts/meta.php"; ?>
</head>
<body>
    <?php include "parts/navbar.php"; ?>

    <div class="view-window" style="background-image: url(img/back.jpg);background-position: 0 100%;">
        <h2>Shop All</h2>
    </div>

    <div class="container">
        <div class="form-control">
            <form class="hotdog light" id="product-search">
                <input type="search" placeholder="Search Products">
            </form>
        </div>

        <div class="form-control">
            <div class="card soft">
                <div class="display-flex flex-wrap">
                    <div class="display-flex flex-stretch">
                        <div class="flex-none">
                            <button class="form-button" type="button" data-filter="category" data-value="">All</button>
                        </div>
                        <div class="flex-none">
                            <button class="form-button" type="button" data-filter="category" data-value="clothes">Apparel</button>
                        </div>
                        <div class="flex-none">
                            <button class="form-button" type="button" data-filter="category" data-value="shoes">Shoes</button>
                        </div>
                        <div class="flex-none">
                            <button class="form-button" type="button" data-filter="category" data-value="accessories">Accessories</button>
                        </div>
                    </div>
                    <div class="flex-none">
                        <div class="form-select">
                            <select class="js-sort">
                                <option value="1">Newest</option>
                                <option value="2">Oldest</option>
                                <option value="3">Least Expensive</option>
                                <option value="4">Most Expensive</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="productlist grid gap"></div>
    </div>
</body>
</html>
