<?php
include_once "db.php";
include_once "user.php";

$user = new User((new Database())->getConnection());
if (!$user->isAdmin()) {
    header("Location: login.php");
    exit;
}

$conn = (new Database())->getConnection();

// Fetch services
$stmt = $conn->query("SELECT * FROM services ORDER BY created_at DESC");
$services = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<h1>Admin Dashboard - Services</h1>
<a href="addService.php">Add Service</a>
<table>
    <tr><th>Title</th><th>Description</th><th>Actions</th></tr>
    <?php foreach ($services as $s): ?>
        <tr>
            <td><?= $s['title'] ?></td>
            <td><?= $s['description'] ?></td>
            <td>
                <a href="editService.php?id=<?= $s['id'] ?>">Edit</a>
                <a href="deleteService.php?id=<?= $s['id'] ?>" onclick="return confirm('Delete?')">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
