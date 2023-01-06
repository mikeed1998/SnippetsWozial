<?php
    define("CLIENT_ID", "AYkGeoYxq2VjRX9T6gE5oN7zK6ucjvNWZ5kfGvp_8d_QcRN-yU8nafO7SviEWYzTp1lorgB-T2ptEdG7");
    define("CURRENCY", "MXN");
    define("KEY_TOKEN", "APR.wqc-354*");
    define("MONEDA", "$");

    session_start();

    $num_cart = 0;
    if(isset($_SESSION['carrito']['productos'])) {
        $num_cart = count($_SESSION['carrito']['productos']);
    }
?>