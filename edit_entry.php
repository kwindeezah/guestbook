<?php 
include('config.php');

if(isset($_POST["edit"])) {
	$id = intval($_POST["id"]);
    $comment = htmlentities(html_entity_decode($_POST["comment"]));
    $name = htmlentities(html_entity_decode($_POST["name"]));
	$update = mysqli_query($conn, "UPDATE `guest_entry` SET `name` = '{$name}', `comment` = '{$comment}' WHERE id = {$id}");
    if($update) {
        header("location: index.php");
    }
} else{
    // echo "Update failed";
    header("location: index.php");
}
?>


