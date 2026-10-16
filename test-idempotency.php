<?php
$data = [
    'order_id'        => 12,
    'amount'          => 8450.00,
    'customer_name'   => 'Test',
    'payment_method'  => 'CARD',
    'idempotency_key' => 'cart-order-12',
    'outcome'         => 'SUCCESS',
];
$ch = curl_init('http://localhost/payment-gateway/api/payments.php');
curl_setopt_array($ch, [
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
    CURLOPT_RETURNTRANSFER => true,
]);
echo curl_exec($ch);
curl_close($ch);
