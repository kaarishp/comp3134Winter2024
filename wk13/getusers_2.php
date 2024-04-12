<?php

// Once again, Hidden mysqli information in .env file, won't appear in github repo 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$users = [];
if (isset($_GET['firstname'])) {
    $firstname = $_GET['firstname'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE firstname = ? AND active = 1");
    $stmt->bind_param("s", $firstname); 
    
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
    }
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Get Users</title>
</head>
<body>
    <h1>Query Users Securely</h1>
    <form method="GET">
        <input type="text" name="firstname" placeholder="Enter first name">
        <button type="submit">Search</button>
    </form>
    
    <h2>Results</h2>
    <table">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Active</th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['username']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['firstname']; ?></td>
            <td><?php echo $user['lastname']; ?></td>
            <td><?php echo $user['active']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
