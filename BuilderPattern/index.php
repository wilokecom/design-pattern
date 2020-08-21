<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'vendor/autoload.php';

$oPayment = new StripeCheckout();

(new Checkout())->proceed($oPayment);
