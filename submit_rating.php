<?php
// Set headers to allow cross-origin requests
header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['rating'])) {
    $rating = intval($data['rating']);

    // Normally, you'd save the rating to a database. Here's a placeholder for demonstration:
    $file = 'ratings.txt';
    file_put_contents($file, "Rating: $rating\n", FILE_APPEND);

    echo json_encode(['message' => 'Rating submitted successfully!']);
} else {
    echo json_encode(['message' => 'Failed to submit rating.']);
}
?>
