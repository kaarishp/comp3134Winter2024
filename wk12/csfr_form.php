<?php
session_start();
$_SESSION['confirmation'] = bin2hex(random_bytes(32));
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <h1>CSFR Protected Form</h1>
    <form action="csfr_action.php" method="POST">
        <input type="hidden" name="confirmation" value="<?php echo $_SESSION['confirmation']; ?>">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
