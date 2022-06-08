<?php

include('config.php');?>

<html>
<head>
    <title>Guestbook</title>
    <link rel="stylesheet" href="gb-style.css">
</head>
<body>
<div class="guestbook">
    <h1 class="gb">Guest Book</h1>
    <?php
$result = mysqli_query($conn, "SELECT * FROM guest_entry ORDER BY id");
        while($guestData = mysqli_fetch_array($result)){ 
            $name = $guestData['name'];
            $comment = $guestData['comment'];
            $dateTime = $guestData['time'];?>

            <h4><?php echo $name;?>&nbsp;&nbsp;<span><?php echo $dateTime;?></span><br>
            <span><a href="edit.php?id=<?php echo $guestData['id'] ?>">Edit</a></span>&nbsp;&nbsp;
            <span><a href="delete.php?id=<?php echo $guestData['id'] ?>">Delete</a></span></h4>
            <input type="text" name = "comment" class="gbcomment" readonly value = "<?php echo $comment;?>">
        <?php } ?>
</div>
</body>
</html>