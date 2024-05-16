<?php
// Include Razorpay PHP SDK
require 'path/to/razorpay-php/Razorpay.php';

use Razorpay\Api\Api;

// Initialize Razorpay with your API keys
$api = new Api('rzp_test_DKpFlXNG48IVDH', 'YOUR_KEY_SECRET');

// Create a Razorpay order
$order = $api->order->create(array(
    'amount' => 50000, // amount in paise (e.g., 50000 for ₹500)
    'currency' => 'INR',
    'payment_capture' => 1 // auto capture payment when order is created
));

// Get the payment link from the order response
$payment_link = $order->short_url;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Virtual Smart Card Payment</title>
</head>
<body>
    <h1>Scan the QR Code to Make Payment</h1>
    <?php
    // Include QR code library
    require 'path/to/qrcode-php/qrcode.php';

    // Generate QR code
    QRcode::png($payment_link, 'payment_qr.png');

    // Display QR code
    echo '<img src="payment_qr.png" alt="Payment QR Code">';
    ?>
</body>
</html>
