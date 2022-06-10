<?php include('config.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Book</title>
    <link rel="stylesheet" href="style.css">
    <!-- <script src=”https://www.google.com/recaptcha/api.js” async defer></script> -->
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
        <input type="submit" name="submit" value="Sign Guestbook" class="submit">
        </div>
    </form>
    <hr>
    
    <h1 class="gb">Guest Book</h1>
    <?php
$result = mysqli_query($conn, "SELECT * FROM guest_entry ORDER BY id");?>
<table>
	<thead>
		<tr>
		    <th>Name</th>
			<th>Date/Time</th>
			<th>Comment</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
        <?php while($guestData = mysqli_fetch_array($result)){ 
            $name = $guestData['name'];
            $comment = $guestData['comment'];
            $dateTime = $guestData['time'];?>
    <tr>
            <td><?php echo $name;?></td>
            <td><?php echo $dateTime;?></td>
            <td><?php echo $comment;?></td>
            <td><a href="edit.php?id=<?php echo $guestData['id'] ?>" class="edit-btn">Edit</a></td>
            <td><a href="delete.php?id=<?php echo $guestData['id'] ?>" class="del-btn">Delete</a></td>
   </tr>
        <?php } ?>
</table>
</body>
</html>
