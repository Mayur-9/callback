<?php


error_reporting( error_reporting() & ~E_NOTICE );


$secret_key="YLDGJ3U4UF3ebjWod2X4DMfS"; //Replace your secret key here
$razorpay_payment_id =$_POST["razorpay_payment_id"];
$razorpay_order_id=$_POST["razorpay_order_id"];
$razorpay_signature=$_POST["razorpay_signature"];


     //   echo "<h3>Thank You for the purchase, your order id is " . $razorpay_order_id . " </h3>";
		echo "<h4>Thank You for the purchase, your payment_id is " . $razorpay_payment_id . " </h4>";
		//echo "<h5>Razorpay Signature  ".$razorpay_signature."</h5>";



?>








