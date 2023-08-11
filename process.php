<?php

require_once('db-config.php');

session_start();



if (isset($_POST['donation-post'])) {
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $description = mysqli_real_escape_string($db, $_POST['description']);
    $imagePath = "./uploads/" . $_FILES['image']['name'];
    $moneyAmount = $_POST['amount'];
    $deadline = $_POST['date'];

    move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
    $query = "INSERT INTO `donation_posts`( `title`, `description`,  `image`, `end_date`, `amount`) 
                                        VALUES ('$title','$description','$imagePath','$deadline','$moneyAmount');";
    $result =  mysqli_query($db, $query);
    if ($result) {
        echo 'Data inserted successfully!';
        header('Location: donate_index.php');
        exit;
    } else {
        echo 'Error: ' . mysqli_error($db);
    }
}

if (isset($_POST['donate'])) {
    $postid = $_POST['d-id'];
    $paymentMethod =$_POST['method'];
    $number=$_POST['number'];
    $moneyAmount = $_POST['amount'];
  
    $query = "INSERT INTO `donations`(`post_id`, `phone`,`amount`, `donation_method`) 
                VALUES ('$postid','$number','$moneyAmount',$paymentMethod);";
    $result =  mysqli_query($db, $query);
    if ($result) {
        echo 'Data inserted successfully!';
        header('Location: donate_confirmation.php');
        exit;
    } else {
        echo 'Error: ' . mysqli_error($db);
    }
}

