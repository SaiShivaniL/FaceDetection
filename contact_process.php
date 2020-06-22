<?php
require "common.php";
    $message = $_POST['message'];
    $message = mysqli_real_escape_string($con , $message);
    
    $name = $_POST['name'];
    $name = mysqli_real_escape_string($con , $name);
    
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($con , $email);

    $subject = $_POST['subject'];
    $subject = mysqli_real_escape_string($con , $subject);
    
    
    
    $email_regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    $contact_regex = "/^[789][0-9]{9}$/";
    
   
   
        $insert_query = "INSERT INTO contact (message,name,email,subject) VALUES ('$message','$name','$email','$subject')";
        $inser_query_result = mysqli_query($con , $insert_query) or die(mysqli_error($con));
        $id = mysqli_insert_id($con);
        $_SESSION['id'] = $id;
        $_SESSION['email'] = $email;
        header('location:success1.php');
    



?>
