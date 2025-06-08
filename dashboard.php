<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html>
<head>
    <title>My Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f5f7fa;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #4a90e2;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .container {
            width: 90%;
            max-width: 800px;
            margin: 30px auto;
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            color: #333;
        }

        a {
            color: #4a90e2;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .item {
            border-bottom: 1px solid #ddd;
            padding: 15px 0;
        }

        .item img {
            max-width: 150px;
            border-radius: 5px;
        }

        .message {
            background-color: #e0ffe0;
            padding: 10px;
            border: 1px solid #6ac36a;
            color: #2f7a2f;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        .nav-links {
            margin-bottom: 20px;
        }

        .nav-links a {
            margin-right: 15px;
            font-weight: bold;
        }

        .delete-btn {
            color: red;
            font-weight: bold;
        }

        .delete-btn:hover {
            text-decoration: underline;
        }

        p {
            color: #444;
        }
    </style>
</head>
<body>

<header>
    <h1>Welcome, <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM users WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'];
        }
       }
       ?>!</h1>
</header>

<div class="container">
    <div class="nav-links">
        <a href="homepage.php">← Back to Homepage</a>
        <a href="sell.php">➕ Sell New Item</a>
        <a href="logout.php">Logout</a>
    </div>

   
    <h2>My Listed Items</h2>

    <?php if ($result->num_rows > 0): ?>
        <?php while ($item = $result->fetch_assoc()): ?>
            <div class="item">
                <strong><?php echo htmlspecialchars($item['name']); ?></strong> – R<?php echo $item['price']; ?><br>
                <em><?php echo nl2br(htmlspecialchars($item['description'])); ?></em><br><br>
                <img src="<?php echo $item['image_path']; ?>" alt="Item Image"><br><br>
                <a class="delete-btn" href="?delete=<?php echo $item['id']; ?>" onclick="return confirm('Are you sure you want to delete this item?')">❌ Delete</a>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>You haven't listed any items yet.</p>
    <?php endif; ?>
</div>

</body>
</html>