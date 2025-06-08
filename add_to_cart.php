<?php
session_start();
require_once 'connect.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$item_id = intval($_POST['item_id'] ?? 0);

// Check if item is already in cart
$check = "SELECT * FROM cart WHERE user_id = ? AND item_id = ?";
$stmt = $conn->prepare($check);
$stmt->bind_param("ii", $user_id, $item_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $_SESSION['message'] = "Item is already in your cart.";
} else {
    // Add item to cart
    $insert = "INSERT INTO cart (user_id, item_id) VALUES (?, ?)";
    $stmt = $conn->prepare($insert);
    $stmt->bind_param("ii", $user_id, $item_id);
    if ($stmt->execute()) {
        $_SESSION['message'] = "Item added to cart successfully!";
    } else {
        $_SESSION['message'] = "Error adding item to cart.";
    }
}

header("Location: homepage.php");
exit();
