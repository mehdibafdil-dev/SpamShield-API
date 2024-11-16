<?php
/**
 * SpamShield API - PHP Client
 * 
 * A PHP client for spam detection service that interfaces with Flask backend
 * 
 * @author MEHDI BAFDIL
 * @copyright Copyright (c) 2024 MEHDI BAFDIL
 * @license MIT License
 * @version 1.0.0
 */

// Function to check if a message is spam
function checkIfSpam($message) {
    // URL of your Flask API endpoint
    $url = 'http://localhost:5000/verify'; // Adjust if your Flask app runs on a different host or port

    // Initialize cURL session
    $ch = curl_init($url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
        'message' => $message
    ]));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/x-www-form-urlencoded'
    ]);

    // Execute cURL session and fetch response
    $response = curl_exec($ch);

    // Check for errors
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }

    // Close cURL session
    curl_close($ch);

    // Decode and return the JSON response
    return json_decode($response, true);
}

// Example usage
$message = "o not have money , get software cds from here !  software compatibility . . . . ain ' t it great ?  grow old along with me the best is yet to be";
$result = checkIfSpam($message);


if ($result && isset($result['code']) && $result['code'] == 1) {
    echo 'Spam Message!!';
} else {
    echo 'Non Spam Message!!';
}
?>
