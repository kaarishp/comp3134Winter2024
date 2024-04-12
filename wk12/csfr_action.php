<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sessionToken = $_SESSION['confirmation'] ?? '';
    $postToken = $_POST['confirmation'] ?? '';

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $message = "Failed: Incorrect credentials or invalid token";

    if ($username === 'host' && $password === 'pass' && $sessionToken === $postToken) {
        $message = "Success: Logged in!";
    }

    $_SESSION['message'] = $message;
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

if (isset($_SESSION['message'])) {
    $splashMessage = $_SESSION['message'];
    unset($_SESSION['message']); 
} else {
    $splashMessage = '';
}
?>

<!DOCTYPE html>
<body>
    <div>
        <?php echo $splashMessage; ?>
    </div>
</body>
</html>
