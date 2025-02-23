<?php
require_once 'stripe/init.php';
require_once 'config.php';

$stripe = new \Stripe\StripeClient(STRIPE_API_KEY);
header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost:8000';
    // Convert product price to cent 
$stripeAmount = round($productPrice*100, 2); 
$checkout_session = $stripe->checkout->sessions->create([
  'payment_method_types' => ['card'],
  'ui_mode' => 'embedded',
  'line_items' => [[
    # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
    'price_data' => [
        'currency' => 'THB',
        'unit_amount' => $stripeAmount,
        'product_data' => [
          'name' => $productName,
          'description' => 'test',
          'images' => ['https://e0.pxfuel.com/wallpapers/188/66/desktop-wallpaper-white-background-white.jpg'],
        ],
      ],
    'quantity' => 1,
  ]],
  
  'mode' => 'payment',
  'return_url' => $YOUR_DOMAIN . '/return.html?session_id={CHECKOUT_SESSION_ID}',
]);

  echo json_encode(array('clientSecret' => $checkout_session->client_secret));