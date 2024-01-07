<?php
session_start();

$max_attempts = 3;

if (!isset($_SESSION['target_number']) || !isset($_SESSION['attempts_left']) || $_SESSION['attempts_left'] <= 0) {
    $_SESSION['target_number'] = rand(1, 25);
    $_SESSION['attempts_left'] = $max_attempts;
}

$target_number = $_SESSION['target_number'];
$attempts_left = $_SESSION['attempts_left'];

if ($_SERVER['REQUEST_METHOD'] == "POST" && $attempts_left > 0) {
    $user_number = $_POST['number'];

    if ($user_number == $target_number) {
        echo "<h2>You are correct!</h2>";
        session_destroy();
    } else if ($user_number > $target_number) {
        echo "<h2>Too High!</h2>";
    } else {
        echo "<h2>Too Low!</h2>";
    }

    $_SESSION['attempts_left']--;
    $attempts_left = $_SESSION['attempts_left'];
}

if ($attempts_left <= 0) {
    echo "<h2>Out of attempts! The number was $target_number.</h2>";
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guessing game</title>
</head>

<body>
    <h1>Guess the number I am thinking</h1>
        <form method="POST">
            <p>Attempts left: <?php echo $attempts_left; ?></p>
            <input autofocus type="number" name="number" id="">
            <button type="submit">Check</button>
        </form>
</body>

</html>
