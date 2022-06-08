<?php

include('config.php');

if (isset($_GET['id'])){  
		$id = $_GET['id'];
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM guest_entry WHERE id=$id");
        if (mysqli_num_rows($record) > 0 ) {
			$n = mysqli_fetch_array($record);
			$comment = $n['comment'];
            echo '<form method="post" action="edit_entry.php">' ;
            echo '<input type="hidden" name="id" value="'. $id . '" >';
            echo  '<textarea name="comment" >' . $comment . '</textarea><br><button class="btn" type="submit" name="edit" >Edit</button>';
            echo '</form>';
		}
    }
?>