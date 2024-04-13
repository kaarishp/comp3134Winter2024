<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Echo Form</title>
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
        echo "<p>" . $_GET['q'] . "</p>";
    }
    ?>
</body>
</html>
