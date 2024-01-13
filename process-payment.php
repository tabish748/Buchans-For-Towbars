<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $transactionReference = $data['transactionReference'];
    $amount = $data['amount'];

    // Convert amount from pounds to pence
    $amountInPence = $amount * 100; // Multiply by 100 to convert to pence

    $url = 'https://try.access.worldpay.com/payment_pages';
    $headers = [
        'Authorization: Basic ' . base64_encode('IK7yKK3BlyM58hbS:n7QEckii4QTSMwQPz7REEZI5LoUQ0LcRDxtHJpw1KYalxBQyW9subZlArGuNsewq'),
        'Content-Type: application/vnd.worldpay.payment_pages-v1.hal+json',
        'Accept: application/vnd.worldpay.payment_pages-v1.hal+json'
    ];

    $requestBody = [
        'transactionReference' => $transactionReference,
        'merchant' => ['entity' => 'POxxxxxxxxx'], // Replace with your actual merchant entity ID
        'narrative' => ['line1' => 'BuchansForTowbars Ltd'],
        'value' => ['currency' => 'GBP', 'amount' => $amountInPence] // Use the converted amount
    ];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($requestBody));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        // Handle CURL errors here
        echo 'Curl error: ' . curl_error($ch);
    }
    curl_close($ch);

    echo $response;
} else {
    echo 'Invalid request method';
}
?>
