<?php
$weak_passwords = ['123456', 'password', '123456789', '12345678', '12345', '111111', '1234567'];

$username = "kingcyber";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'];

    if (in_array($password, $weak_passwords)) {
        echo "Welcome {$username} to Your Portal";
    } else {
        echo "<h1>Weak Password</h1>";
        echo "<form method='post'>";
        echo "<input type='hidden' name='username' value='{$username}'>";
        echo "<label>Password</label>";
        echo "<input type='password' name='password'><br/>";
        echo "<input type='submit'>";
        echo "</form>";
        echo "<p>Password is not one of the most common passwords.</p>";
    }
} else {
    echo "<h1>Weak Password</h1>";
    echo "<form method='post'>";
    echo "<input type='hidden' name='username' value='{$username}'>";
    echo "<label>Password</label>";
    echo "<input type='password' name='password'><br/>";
    echo "<input type='submit'>";
    echo "</form>";
}
?>
