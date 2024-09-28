<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals Activity</title>
</head>
<body>
    <form action="post.php" method="POST"> 
        <H1>Discriminant of a Quadratic Equation</H1>

        <p><label for="valA">A</label>
        <input type="text" inputmode="numeric" name="valA" placeholder="Value of A Here"></p>
        <p><label for="valB">B</label>
        <input type="text" inputmode="numeric" name="valB" placeholder="Value of B Here"></p>
        <p><label for="valC">C</label>
        <input type="text" inputmode="numeric" name="valC" placeholder="Value of C Here"></p>

        <p><input type="submit" name="submitBtn" value="Submit"></p>
    </form>
</body>
</html>