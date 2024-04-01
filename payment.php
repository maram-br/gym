
<?php

session_start();
$_SESSION['offreID'] = $_POST['offreID'];
$_SESSION['offreDuration'] = $_POST['offreDuration'];
if (!isset($_SESSION['user'])) {
    header('Location: login/user');
    exit;
}

require __DIR__ . "/vendor/autoload.php";
$stripe_secret_key = "sk_test_51OyjfCLP09EeDvhaQKed2zemxoS5nkUOnsy22lqz52tXfxWCrs7sUIMxDGLIyWyoqCXY9vfjkS44Yhkqb0eeBCNq00ksDn2Xnc";
\Stripe\Stripe::setApiKey($stripe_secret_key);

try {
    $checkout_session = \Stripe\Checkout\Session::create([
        "mode" => "payment",
        "success_url" => "http://localhost/projet/gym/success.php",
        "line_items" => [
            [
                "quantity" => 1,
                "price_data" => [
                    "currency" => "usd",
                    "unit_amount" => $_POST['price'],
                    "product_data" => [
                        "name" => $_POST['offre']
                    ]
                ]
            ]
        ]
    ]);

    http_response_code(303);
    header('Location: ' . $checkout_session->url);
} catch (\Stripe\Exception\ApiErrorException $e) {
    // Log the error for debugging purposes
    error_log($e->getMessage());

    // Redirect to an error page
    header('Location: error.php');
    exit;
}
