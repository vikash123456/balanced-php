<?php

require(__DIR__ . '/vendor/autoload.php');

Httpful\Bootstrap::init();
RESTful\Bootstrap::init();
Balanced\Bootstrap::init();

Balanced\Settings::$api_key = "2fd37702d33511e2a00f026ba7d31e6f";

$customer = \Balanced\Customer::get("/v1/customers/CU7GuPv9Y2F8ySwJHuHL0YWq");
$customer->debit('1000');