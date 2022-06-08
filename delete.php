<?php

include('config.php');

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$delete = mysqli_query($conn, "DELETE FROM guest_entry WHERE id=$id");
    if($delete){
        header('location: guest-book.php');
    }
} else {
    echo "Delete failed";
    header('location: guest-book.php');
}
?>