<?php
include("config.php");

if(isset($_GET["id"])) {
	$id = intval($_GET["id"]);
	$delete = mysqli_query($conn, "DELETE FROM guest_entry WHERE id=$id");
    if($delete) {
        header("location: index.php");
    }
} else {
    // echo "Delete failed";
    header("location: index.php");
}
?>