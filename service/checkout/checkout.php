<?php

require_once 'vendor/autoload.php';
require_once 'config.php';

$stripe = new \Stripe\StripeClient(STRIPE_API_KEY);
header('Content-Type: application/json');

$stripe->paymentMethodDomains->create(['domain_name' => '']);

$stripeAmount = round($productPrice*100, 2);

try {
    // retrieve JSON from POST body
    $jsonStr = file_get_contents('php://input');
    $jsonObj = json_decode($jsonStr);

    // Create a PaymentIntent with amount and currency
    $paymentIntent = $stripe->paymentIntents->create([
        'amount' => $stripeAmount,
        'currency' => 'thb',
        // In the latest version of the API, specifying the `automatic_payment_methods` parameter is optional because Stripe enables its functionality by default.
        'automatic_payment_methods' => [
            'enabled' => true,
        ],
    ]);

    $output = [
        'clientSecret' => $paymentIntent->client_secret,
    ];

    echo json_encode($output);
} catch (Error $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}
?>

