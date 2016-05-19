<?php

if (isset($_GET['id'])) {
    $phone_id = $_GET['id'];
    $cart = $_SESSION['cart'];

    if ( !in_array($phone_id, $cart) ) {
        $_SESSION['cart'][] = $phone_id;
    }

    header('Location: ?page=cart');
}

 ?>
