<?php include('config.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body">
    <form action="guest-entry.php" method="post" class="form-class">
        <h1 class="h1">Sign Guest Book</h1>
        <div class="form-group">
        <label for="name">Name:</label><br>
        <input type="name" name="name" placeholder="Name" required><br>
        </div>
        <div class="form-group">
        <label for="email">Email:</label><br>
        <input type="email" name="email" placeholder="Email" required><br>
        </div>
        <div class="form-group">
        <label for="comment">Comment:</label><br>
        <textarea name="comment" placeholder="Write in your comment" class="comment" required></textarea><br>
        </div>
        <div class="form-group">
        <input type="submit" name="submit" value="Sign Guestbook" class="submit">
        </div>
    </form>
</body>
</html>