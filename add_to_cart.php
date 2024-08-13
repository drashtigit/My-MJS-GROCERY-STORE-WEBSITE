<?php
session_start();
require 'DB-connection.php'; 

header('Content-Type: application/json');


$input = json_decode(file_get_contents('php://input'), true);

if (!isset($input['id']) || !isset($input['name']) || !isset($input['price']) || !isset($input['image'])) {
    echo json_encode(['success' => false, 'message' => 'Invalid product data']);
    exit;
}

$productId = $input['id'];
$productName = $input['name'];
$productPrice = $input['price'];
$productImage = $input['image'];
$userId = $_SESSION['user_id']; 


$sql = "SELECT quantity FROM cart_items WHERE user_id = ? AND product_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $userId, $productId);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($quantity);

if ($stmt->num_rows > 0) {
    
    $stmt->fetch();
    $newQuantity = $quantity + 1;

    $updateSql = "UPDATE cart_items SET quantity = ?, added_at = CURRENT_TIMESTAMP WHERE user_id = ? AND product_id = ?";
    $updateStmt = $conn->prepare($updateSql);
    $updateStmt->bind_param("iii", $newQuantity, $userId, $productId);

    if ($updateStmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Product quantity updated']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to update product quantity']);
    }

    $updateStmt->close();
} else {
    
    $insertSql = "INSERT INTO cart_items (user_id, product_id, product_name, product_price, product_image, quantity, added_at)
                  VALUES (?, ?, ?, ?, ?, 1, CURRENT_TIMESTAMP)";
    $insertStmt = $conn->prepare($insertSql);
    $insertStmt->bind_param("iisss", $userId, $productId, $productName, $productPrice, $productImage);

    if ($insertStmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Product added to cart']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to add product to cart']);
    }

    $insertStmt->close();
}

$stmt->close();
$conn->close();
?>
