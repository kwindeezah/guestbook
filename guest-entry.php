<?php

include('config.php');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $query = "INSERT INTO guest_entry (name, email, comment) VALUES ('$name', '$email', '$comment')";
    $insertQuery = mysqli_query($conn, $query);

    if($query){
        // echo "Entry added, Thank You.<a href='guest-book.php'><span>Click here to view entries</span></a><br><br><br>";
     header('Location: guest-book.php');
    }
}

