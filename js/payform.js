// global variables
            var stripe = null;
            var cardElement = null;

            const stripePublicKey = document.getElementById("stripe-public-key").value;

            let emailInput = document.getElementById('user-email');
            let phoneInput = document.getElementById('user-name');
            let ready;

            if (emailInput.value.length == 0 || phoneInput.value.length == 0) {
                $('pay-money').attr("disabled", "true");
                document.getElementById('pay-money').style.filter = "grayscale(100%)";
                document.getElementById('pay-money').style.backgroundColor = "#666";
                document.getElementById('pay-money').style.borderColor = "#666";
                document.getElementById('pay-money').style.color = "#aaa";
                document.getElementById('pay-money').style.padding = "10px";
                ready = 0;
            }

            $('#user-email').bind('input propertychange', function() {
                if (emailInput.value.length == 0 || phoneInput.value.length == 0) {
                    $('pay-money').attr("disabled", "true");
                    document.getElementById('pay-money').style.filter = "grayscale(100%)";
                    document.getElementById('pay-money').style.backgroundColor = "#666";
                    document.getElementById('pay-money').style.borderColor = "#666";
                    document.getElementById('pay-money').style.color = "#aaa";
                    document.getElementById('pay-money').style.padding = "10px";
                    ready = 0;
                }
            });

            $('#user-name').bind('input propertychange', function() {
                if (emailInput.value.length == 0 || phoneInput.value.length == 0) {
                    $('pay-money').attr("disabled", "true");
                    document.getElementById('pay-money').style.filter = "grayscale(100%)";
                    document.getElementById('pay-money').style.backgroundColor = "#666";
                    document.getElementById('pay-money').style.borderColor = "#666";
                    document.getElementById('pay-money').style.color = "#aaa";
                    document.getElementById('pay-money').style.padding = "10px";
                    ready = 0;
                }
            });

            $('#user-email').bind('input propertychange', function() {
                if (emailInput.value.length <= 5 && phoneInput.value.length <= 5) {
                    $('pay-money').attr("disabled", "true");
                    document.getElementById('pay-money').style.filter = "grayscale(100%)";
                    document.getElementById('pay-money').style.backgroundColor = "#666";
                    document.getElementById('pay-money').style.borderColor = "#666";
                    document.getElementById('pay-money').style.color = "#aaa";
                    document.getElementById('pay-money').style.padding = "10px";
                    ready = 0;
                }
                if (emailInput.value.length > 5 && phoneInput.value.length > 5) {
                    $('pay-money').attr("disabled", "false");
                    document.getElementById('pay-money').style.filter = "grayscale(0%)";
                    document.getElementById('pay-money').style.backgroundColor = "#293c43";
                    document.getElementById('pay-money').style.borderColor = "#293c43";
                    document.getElementById('pay-money').style.color = "#ece5c9";
                    document.getElementById('pay-money').style.padding = "12px";
                    ready = 1;
                }
            });

            $('#user-name').bind('input propertychange', function() {
                if (emailInput.value.length <= 5 && phoneInput.value.length <= 5) {
                    $('pay-money').attr("disabled", "true");
                    document.getElementById('pay-money').style.filter = "grayscale(100%)";
                    document.getElementById('pay-money').style.backgroundColor = "#666";
                    document.getElementById('pay-money').style.borderColor = "#666";
                    document.getElementById('pay-money').style.color = "#aaa";
                    document.getElementById('pay-money').style.padding = "10px";
                    ready = 0;
                }
                if (emailInput.value.length > 5 && phoneInput.value.length > 5) {
                    $('pay-money').attr("disabled", "false");
                    document.getElementById('pay-money').style.filter = "grayscale(0%)";
                    document.getElementById('pay-money').style.backgroundColor = "#293c43";
                    document.getElementById('pay-money').style.borderColor = "#293c43";
                    document.getElementById('pay-money').style.color = "#ece5c9";
                    document.getElementById('pay-money').style.padding = "12px";
                    ready = 1;
                }
            });


            function payViaStripe() {
                $('pay-money').attr("disabled", "true");
                document.getElementById('pay-money').style.filter = "grayscale(100%)";
                document.getElementById('pay-money').style.backgroundColor = "#666";
                document.getElementById('pay-money').style.borderColor = "#666";
                document.getElementById('pay-money').style.color = "#aaa";
                document.getElementById('pay-money').style.padding = "10px";
                $('pay-money').fadeOut("1500");
                // get stripe payment intent
                const stripePaymentIntent = document.getElementById("stripe-payment-intent").value;

                // execute the payment
                if (ready == 1) {
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
                                //console.log("...", result.paymentIntent.id);
                                document.getElementById('pay-title').innerText = "Зачекайте, будь ласка. Оброблюємо платіж...";
                                window.location.href = "../php/thanks.html";

                                // [call AJAX function here]
                            }
                        });
                } else {
                    document.getElementById('pay-title').innerText = "Ви ввели не всі дані";
                }
            }


            // initialize stripe when page loads
            window.addEventListener("load", function() {
                stripe = Stripe(stripePublicKey);
                var elements = stripe.elements();
                cardElement = elements.create('card');
                cardElement.mount('#stripe-card-element');
                $("#preloader").slideUp("slow");
            });