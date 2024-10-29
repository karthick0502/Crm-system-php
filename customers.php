<?php
require 'db.php';
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add'])) {
        $stmt = $pdo->prepare("INSERT INTO customers (name, email, phone, address, user_id) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$_POST['name'], $_POST['email'], $_POST['phone'], $_POST['address'], $_SESSION['user_id']]);
    } elseif (isset($_POST['delete'])) {
        $stmt = $pdo->prepare("DELETE FROM customers WHERE id = ?");
        $stmt->execute([$_POST['customer_id']]);
    }
}

$stmt = $pdo->prepare("SELECT * FROM customers WHERE user_id = ?");
$stmt->execute([$_SESSION['user_id']]);
$customers = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customers</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container">
        <h1 class="mt-5">Manage Customers</h1>
        <form method="POST" action="customers.php" class="mb-4">
            <div class="form-group">
                <input type="text" name="name" required class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <input type="email" name="email" required class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="text" name="phone" class="form-control" placeholder="Phone">
            </div>
            <div class="form-group">
                <textarea name="address" class="form-control" placeholder="Address"></textarea>
            </div>
            <button type="submit" name="add" class="btn btn-primary">Add Customer</button>
        </form>
        <h2>Customer List</h2>
        <ul class="list-group">
            <?php foreach ($customers as $customer): ?>
                <li class="list-group-item">
                    <?= htmlspecialchars($customer['name']) ?> - <?= htmlspecialchars($customer['email']) ?>
                    <form method="POST" action="customers.php" style="display:inline;">
                        <input type="hidden" name="customer_id" value="<?= $customer['id'] ?>">
                        <button type="submit" name="delete" class="btn btn-danger btn-sm float-right delete-button">Delete</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.delete-button'); // Target only delete buttons
            deleteButtons.forEach(button => {
                button.addEventListener('click', function(event) {
                    if (!confirm('Are you sure you want to delete this customer?')) {
                        event.preventDefault();
                    }
                });
            });
        });
    </script>
</body>
</html>