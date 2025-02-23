<?php
@include 'database.php';
// Define your Stripe API keys
define('STRIPE_API_KEY', '');
define('STRIPE_PUBLIC_KEY', '');

// Define URLs for success and cancel pages
define('STRIPE_SUCCESS_URL', 'https://example.com/payment-success.php'); // Replace with your actual success URL
define('STRIPE_CANCEL_URL', 'cancel.html'); // Replace with your actual cancel URL

// You should have a database connection established to work with the cart.
// Your existing code retrieves items from the 'cart' table, but it appears incomplete.
$select_cart = mysqli_query($conn, "SELECT * FROM `total`");
if (mysqli_num_rows($select_cart) > 0) {
    while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
        // Assuming you fetch data like 'name', 'price', etc. from the cart table
        $productName = $fetch_cart['ref'];
        $productPrice = $fetch_cart['grand_total'];
        $currency = "THB";
    }
}
?>
