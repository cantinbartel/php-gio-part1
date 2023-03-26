<?php

$paymentStatus = 'paid';

// Loose Comparaison

switch($paymentStatus) {
    case 'paid':
        echo 'Paid';
        break;
    case 'declined':
        echo 'Payment declined';
        break;
    case 'pending':
        echo 'Pending payment';
        break;
    default:
        'Unknown payment status';
}

echo '<br>', '<br>';

// Strict Comparaison

$paymentStatusDisplay = match($paymentStatus) {
    'paid' => 'Paid',
    'declined' => 'Payment declined',
    'pending' => 'Pending payment',
    default => 'Unknown payment status'
};

echo $paymentStatusDisplay;
