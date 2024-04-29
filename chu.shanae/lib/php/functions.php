<?php
function print_p($v) {
    echo "<pre>",print_r($v),"</pre>";
}

function file_get_json($filename) {
    $file = file_get_contents($filename);
    return json_decode($file);
}

include_once "auth.php";
function makeConn() {
    $conn = new mysqli(...MYSQLIAuth());
    if($conn->connect_errno) die($conn->connect_error);
    $conn->set_charset('utf8');
    return $conn;
}

function makeQuery($conn,$qry) {
    $result = $conn->query($qry);
    if($conn->errno) die($conn->error);
    $a = [];
    while($row = $result->fetch_object()) {
        $a[] = $row;
    }  
    return $a;  
}

$sql = "SELECT * FROM `products`;";

//cartfunctions 

function array_find($array,$fn) {
    foreach($array as $o) if($fn($o)) return $o;
    return false;
}

function getCart() {
    return isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
}

function addToCart($id, $amount) {
    $cart = getCart();

    // Check if the cart is empty or if the product doesn't exist in the cart
    if (empty($cart) || !cartItemById($id)) {
        $_SESSION['cart'][] = (object)[
            "id" => $id,
            "amount" => $amount
        ];
    } else {
        // If the product already exists in the cart, update its quantity
        foreach ($cart as $item) {
            if ($product->id == $id) {
                $product->amount += $amount;
            }
        }
        $_SESSION['cart'] = $cart; // Update the session cart with the modified cart
    }
}

function resetCart() { $_SESSION['cart'] = []; }

function cartItemById($id) {
    return array_find(getCart(),function($o)use($id){return $o->id==$id;});
}

function makeCartBadge() {
    $cart = getCart();
    if(count($cart)==0) {
        return "";
    } else {
        return "(".array_reduce($cart,function($r,$o){return $r+$o->amount;},0).")";

    }
}

function getCartItems() {
    $cart = getCart();

    if(empty($cart)) return [];

    $ids = implode(",",array_map(function($o){return $o->id;},$cart));
    $data = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN ($ids)");

   return  array_map(function($o) use ($cart) {
        $p = cartItemById($o->id);
        $o->amount = $p->amount;
        $o->total = $p->amount * $o->price;
        return $o;

   },$data);
}

?>