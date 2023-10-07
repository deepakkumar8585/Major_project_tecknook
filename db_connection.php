<?php

if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['gender']) && isset($_POST['password'])) :

   
    $db_conn = mysqli_connect("localhost", "root", "", "registration");


    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
	

  
    $sql = "INSERT INTO reg (`firstName`,`lastName`,`gender`,`password`) VALUES ('$firstName', '$lastName', '$gender', '$password')";

   
    $query = mysqli_query($db_conn, $sql);

    
   if ($query) {
                echo 'New data inserted successfully. <a href="index.html">Home</a>';
    } else {
        echo "Failed to insert new data.";
    }
    exit;
endif;

echo '404 Page Not Found. <a href="./index.html">Go Home</a>';