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
                 console.log("The card has been verified successfully...", result.paymentIntent.id);
                 
                 window.location.href="../index.php";

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