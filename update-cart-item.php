<?php
session_start();
require 'DB-connection.php'; 

header('Content-Type: application/json');

$input = json_decode(file_get_contents('php://input'), true);

if (!isset($input['productId']) || !isset($input['action'])) {
    echo json_encode(['success' => false, 'message' => 'Invalid input']);
    exit;
}

$productId = $input['productId'];
$action = $input['action'];
$userId = $_SESSION['user_id']; 

if ($action == 'increase') {
    $sql = "UPDATE cart_items SET quantity = quantity + 1 WHERE user_id = ? AND product_id = ?";
} else if ($action == 'decrease') {
    $sql = "UPDATE cart_items SET quantity = quantity - 1 WHERE user_id = ? AND product_id = ? AND quantity > 1";
}

$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $userId, $productId);

if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Failed to update cart item']);
}

$stmt->close();
$conn->close();
?>
