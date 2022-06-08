<?php

include('config.php');

if (isset($_GET['ed'])){  
		$id = $_GET['ed'];
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM guest_entry WHERE id=$id");


        // foreach(explode("\n", $record) as $rData){ 
        //     $data = explode(",", $rData);
		
        if (count(array($record)) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$address = $n['address'];
		}
    }
    ?>
    <html>
    
    <input type="text" name="comment" value="<?php echo $comment;?>"><br>
    <button class="btn" type="submit" name="edit" >Edit</button> </html>