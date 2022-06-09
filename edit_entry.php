<?php 

include('config.php');

if (isset($_POST['edit'])) {
	$id = $_POST['id'];
    $comment = $_POST['comment'];
    $name = $_POST['name'];
	$update = mysqli_query($conn, "UPDATE `guest_entry` SET `name` = '{$name}', `comment` = '{$comment}' WHERE id={$id}");
    if($update){
        header('location: index.php');
    }
} else{
    // echo "Delete failed";
    header('location: index.php');
}
    ?>


