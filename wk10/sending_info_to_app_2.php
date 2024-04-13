<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Input Echo Form 2</title>
</head>
<body>
    <form method="get">
        <input name="q" placeholder="Enter Text">
        <br/>
        <input type="submit" value="Go">
    </form>

    <?php
    if (isset($_GET['q'])) {
        echo "<h2>Received Input:</h2>";
        $safeInput = strip_tags($_GET['q']);
        echo "<p>Stripped Tags Output: " . $safeInput . "</p>";
        $encodedInput = htmlspecialchars($_GET['q']);
        echo "<p>HTML Entities Output: " . $encodedInput . "</p>";
    }
    ?>
</body>
</html>
