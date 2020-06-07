<?php

echo "WELCOME TO MOBILE SEVA <br><br><br>";

?>



<button id="rzp-button1">Pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_live_i62TMLjjMFz5YG",
    "amount": "100", /// The amount is shown in currency subunits. Actual amount is ₹599.
    "name": "Mobile SEVA",
   // "order_id": "order_Eh6t5jMZkI6C7T", // Pass the order_id if you are using Razorpay Orders.
    "currency": "INR", // Optional. Same as the Order currency
    "description": "Ear phones",
    "callback_url": "http://localhost:8080/Razorpay/Response.php",
    "redirect": "true",
    "image": "/your_logo.png",
    "prefill": {
        "name": "Gaurav Kumar",
        "email": "jack@gmail.com",
        "contact":"9960525051",
        //"method": "card"
    },
    "notes": {
        "aptech_orderid": "1234378",
        "roll_no": "99"
    },
    "theme": {
       // "color": "#F37254"
    }
};
var rzp1 = new Razorpay(options);

document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>



