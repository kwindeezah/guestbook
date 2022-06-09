<?php

include('config.php');?>
<html>
    <head>
<link rel="stylesheet" href="edit.css">
    </head>
</html>

<?php
if (isset($_GET['id'])){  
		$id = intval($_GET['id']);
		$record = mysqli_query($conn, "SELECT * FROM guest_entry WHERE id=$id");
        if (mysqli_num_rows($record) > 0 ) {
			$n = mysqli_fetch_array($record);
            $name = $n['name'];
			$comment = $n['comment'];
            echo '<form method="post" action="edit_entry.php">' ;
            echo '<input type="hidden" name="id" value="'. $id . '" >';
            echo '<h3>Edit Entry</h3>';
            echo'<label for="name">Name:</label><br>';
            echo  '<input name="name" class="edit-name" value="' . html_entity_decode($name) . '"><br>';
            echo'<label for="comment">Comment:</label><br>';
            echo  '<textarea name="comment" class="edit-comment">' . html_entity_decode($comment) . '</textarea><br><br><button class="btn" type="submit" name="edit" >Edit</button>';
            echo '</form>';
		}
    }
?>