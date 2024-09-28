<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answer</title>
</head>
<body>
    <?php
    if (isset($_POST["submitBtn"])) {
        $a = $_POST["valA"];
        $b = $_POST["valB"];
        $c = $_POST["valC"];

        $d = $b * $b - (4 * $a *$c);
        echo "<h4>{$d}</h4>";
    }
?>
</body>
</html>