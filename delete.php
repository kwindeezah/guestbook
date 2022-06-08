<?php

include('config.php');

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	$delete = mysqli_query($conn, "DELETE FROM guest_entry WHERE id=$id");
    if($delete){
        header('location: index.php');
    }else{
        echo "Delete failed";
        header('location: guest-book.php');
    }
	
}