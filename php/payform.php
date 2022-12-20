<?php

require_once "../vendor/autoload.php";

$stripe = new \Stripe\StripeClient("sk_test_51M0i6fA98pVLsS87VeLApCzrQwuPYAoRmRPpO1TYUBiPxBylbRgIEuxCwkeYDOAQWRc9l8Mjh2KeqVGHuBJyPLm700OXQ6u4Dh");

$name = $_POST['name'];
$amount = $_POST['price'];

$payment_intent = $stripe->paymentIntents->create([
    'payment_method_types' => ['card'],

    // convert double to integer for stripe payment intent, multiply by 100 is required for stripe
    'amount' => round($amount) * 100,
    'currency' => 'uah',
    'description' => $name
]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оплата</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../images/header&footer/logo.ico">
    <style>
        * {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #6c8388;
        }

        .pay-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100vw;
        }

        .pay-menu {
            width: 50vw;
            height: 80vh;
            background-color: #41545b;
            box-shadow: -2px 4px 6px rgba(20, 20, 20, 0.7);
            border-radius: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .pay-button {
            padding: 12px;
            border-radius: 10px;
            border: 2px solid #293c43;
            background-color: #293c43;
            font-size: 18px;
            font-weight: 700;
            color: #ece5c9;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin: 15px;
            transition: .3s;
        }

        .pay-button:hover {
            background: none;
            color: #ece5c9;
            transition: .3s;
            border: 2px solid #293c43;
            cursor: pointer;
        }

        #stripe-card-element {
            border-radius: 20px 20px 5px 5px;
            width: 100%;
            height: auto;
            margin: 4px 0px;
            padding: 16px 20px;
            background-color: #6c8388;
        }

        .stripe-elements-wrapper {
            min-width: 320px;
            width: 360px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #293c43;
            padding: 30px;
            border-radius: 10px;
        }

        #user-name,
        #user-email {
            width: 100%;
            padding: 13px 20px;
            outline: none;
            border: none;
            border-radius: 4px;
            color: #222;
            background-color: #6c8388;
            font-size: 16px;
            font-weight: 500;
            margin: 4px 0px;
            text-align: center;
            color: #ece5c9;
        }

        #user-email {
            border-radius: 4px 4px 20px 20px;
        }

        .pay-title {
            margin: 20px 0px;
            color: #ece5c9;
            text-align: center;
        }

        @media screen and (max-width: 769px) {
            .pay-menu {
                width: 80vw;
                padding: 20px;
            }
        }

        @media screen and (max-width: 456px) {
            .pay-menu {
                width: 90vw;
            }

            .stripe-elements-wrapper {
                width: 100%;

            }
        }
    </style>
</head>

<body>
    <section class="pay-page">
        <input type="hidden" id="stripe-public-key" value="pk_test_51M0i6fA98pVLsS87iVeAGG8lnuxyix9XkTwwlcqpf84xVshI2EyyPUOrI757wHuDRM5B0n5lQHVlLdIJ0jeKIYLa00n271IKur" />
        <input type="hidden" id="stripe-payment-intent" value="<?php echo $payment_intent->client_secret; ?>" />

        <!-- credit card UI will be rendered here -->
        <div class="pay-wrapper">
            <div class="pay-menu">
                <h2 class="pay-title">Заповніть ці поля!</h2>
                <div class="stripe-elements-wrapper">
                    <div id="stripe-card-element">
                    </div>
                    <input type="number" id="user-name" value="0000000000" />
                    <input type="email" id="user-email" value="timohavysach@gmail.com" />
                </div>
                <button type="button" class="pay-button" onclick="payViaStripe();">Оплатити</button>
            </div>
        </div>

        <!-- billing details is required for some countries -->
        <input type="hidden" id="user-mobile-number" value="123456789" />
    </section>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        // global variables
        var stripe = null;
        var cardElement = null;

        const stripePublicKey = document.getElementById("stripe-public-key").value;


        function payViaStripe() {
            // get stripe payment intent
            const stripePaymentIntent = document.getElementById("stripe-payment-intent").value;

            // execute the payment
            stripe
                .confirmCardPayment(stripePaymentIntent, {
                    payment_method: {
                        card: cardElement,
                        billing_details: {
                            "email": document.getElementById("user-email").value,
                            "name": document.getElementById("user-name").value,
                            "phone": document.getElementById("user-mobile-number").value
                        },
                    },
                })
                .then(function(result) {

                    // Handle result.error or result.paymentIntent
                    if (result.error) {
                        console.log(result.error);
                    } else {
                        console.log("ААЙАЙАЙАЙААЙ...", result.paymentIntent.id);

                        window.location.href = "../php/thanks.html";

                        // [call AJAX function here]
                    }
                });
        }


        // initialize stripe when page loads
        window.addEventListener("load", function() {
            stripe = Stripe(stripePublicKey);
            var elements = stripe.elements();
            cardElement = elements.create('card');
            cardElement.mount('#stripe-card-element');
        });
    </script>
</body>

</html>