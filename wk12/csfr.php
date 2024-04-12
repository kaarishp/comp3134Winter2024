<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $message = "Failed: Incorrect credentials";

    if ($username === 'host' && $password === 'pass') {
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

<form action="csfr.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br>
    <input type="submit" value="Login">
    <div id="splash">
    <?php echo $splashMessage; ?>
</div>
</form>

