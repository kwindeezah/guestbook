<?php

include('config.php');

if(isset($_POST['submit'])) {
    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']); // Since no validation was done
    $comment = htmlentities($_POST['comment']);
    $query = mysqli_query($conn, "INSERT INTO guest_entry (name, email, comment) VALUES ('{$name}', '{$email}', '{$comment}')");
    // $recaptcha = $_POST['g-recaptcha-response'];
    // $secret_key = "6Lf40FggAAAAAPxp-5KwaT-Zqy7TuszYkzIzqZZ_";
    // // Hitting request to the URL, Google will
    // // respond with success or error scenario
    // $url = 'https://www.google.com/recaptcha/api/siteverify?secret='
    //       . $secret_key . '&response=' . $recaptcha;
    //       // Making request to verify captcha
    // $response = file_get_contents($url);
    // // Response return by google is in
    // // JSON format, so we have to parse
    // // that json
    // $response = json_decode($response);
    // // Checking, if response is true or not
    // if ($response->success == true) {
    //     echo '<script>alert("Google reCAPTACHA verified")</script>';
    // } else {
    //     echo '<script>alert("Error in Google reCAPTACHA")</script>';
    // }
    if($query) {
        // echo "Entry added, Thank You.<a href='guest-book.php'><span>Click here to view entries</span></a><br><br><br>";
        header('Location: index.php');
    }
}
?>

