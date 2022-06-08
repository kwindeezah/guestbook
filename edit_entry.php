<?php 

include('config.php');

if (isset($_POST['edit'])) {
	$id = $_POST['id'];
    $comment = $_POST['comment'];
	$update = mysqli_query($conn, "UPDATE `guest_entry` SET `comment` = '{$comment}' WHERE id={$id}");
    if($update){
        header('location: guest-book.php');
    }
} else{
    // echo "Delete failed";
    header('location: guest-book.php');
}
    ?>


