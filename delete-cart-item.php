<?php
session_start();
require 'DB-connection.php'; 

header('Content-Type: application/json');


$input = json_decode(file_get_contents('php://input'), true);

if (!isset($input['productId'])) {
    echo json_encode(['success' => false, 'message' => 'Invalid input']);
    exit;
}

$productId = $input['productId'];
$userId = $_SESSION['user_id'];

$sql = "DELETE FROM cart_items WHERE user_id = ? AND product_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $userId, $productId);

if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Failed to delete cart item']);
}

$stmt->close();
$conn->close();
?>
