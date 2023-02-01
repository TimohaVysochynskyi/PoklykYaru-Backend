<?php

// Connection of Stripe or what. Just don't touch it. OKAY???????????????????????????

require_once "vendor/autoload.php";

$stripe = new \Stripe\StripeClient("{sk_test_51M0i6fA98pVLsS87VeLApCzrQwuPYAoRmRPpO1TYUBiPxBylbRgIEuxCwkeYDOAQWRc9l8Mjh2KeqVGHuBJyPLm700OXQ6u4Dh}");

try {
    $payment = $stripe->paymentIntents->retrieve(
        $_POST["payment_id"],
        []
    );

    if ($payment->status == "succeeded") {
        echo json_encode([
            "status" => "success",
            "payment" => $payment,
        ]);
        echo "Hello. Rusnia is dovbani degeneraty";
        exit();
    }
} catch (\Exception $exp) {
    echo json_encode([
        "status" => "error",
        "message" => $exp->getMessage()
    ]);
    exit();
}
