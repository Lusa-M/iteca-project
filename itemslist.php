<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "login");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Save item if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['listItem'])) {

    $itemName = mysqli_real_escape_string($conn, $_POST['name']);
    $price = $_POST['price'];
    $condition = mysqli_real_escape_string($conn, $_POST['condition']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $category = mysqli_real_escape_string($conn, $_POST['category'] ?? 'Uncategorized');
    $email = $_SESSION['email'] ?? 'unknown@example.com';

    // Handle image upload
    if (isset($_FILES['image']['tmp_name'])) {
        $imageData = file_get_contents($_FILES['image']['tmp_name']);
        $imageData = mysqli_real_escape_string($conn, $imageData);

        $sql = "INSERT INTO items (itemName, price, condition, description, category, image, seller_email)
                VALUES ('$itemName', '$price', '$condition', '$description', '$category', '$imageData', '$email')";

        if (mysqli_query($conn, $sql)) {
            echo "<p>Item listed successfully!</p>";
        } else {
            echo "<p>Error: " . mysqli_error($conn) . "</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Items Listed</title>
</head>
<body>
    <h1>Items Currently Listed</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Price (R)</th>
                <th>Category</th>
                <th>Condition</th>
                <th>Description</th>
                <th>Seller Email</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM items ORDER BY created_at DESC");

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['image']) . "' width='100' height='100'></td>";
                echo "<td>" . htmlspecialchars($row['itemName']) . "</td>";
                echo "<td>R " . number_format($row['price'], 2) . "</td>";
                echo "<td>" . htmlspecialchars($row['category']) . "</td>";
                echo "<td>" . htmlspecialchars($row['condition']) . "</td>";
                echo "<td>" . htmlspecialchars($row['description']) . "</td>";
                echo "<td>" . htmlspecialchars($row['seller_email']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8'>Error fetching items: " . htmlspecialchars(mysqli_error($conn)) . "</td></tr>";
        }
        ?>
        </tbody>
    </table>
</body>
</html>
