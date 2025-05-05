<?php
// Set header to return JSON
header('Content-Type: application/json');

// Return a success response
echo json_encode([
    'success' => true,
    'message' => 'Thank you for your message. We will get back to you soon!'
]);
?>
