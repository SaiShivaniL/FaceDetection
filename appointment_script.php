<?php
require "common.php";
    $date = $_POST['date'];
    $date = mysqli_real_escape_string($con , $date);
    
    $time = $_POST['time'];
    $time = mysqli_real_escape_string($con , $time);
    
    $services = $_POST['services'];
    $services = mysqli_real_escape_string($con , $services);
    
    $technicians = $_POST['technicians'];
    $technicians = mysqli_real_escape_string($con , $technicians);
    
    $name = $_POST['name'];
    $name = mysqli_real_escape_string($con , $name);

    $contact = $_POST['contact'];
    $contact = mysqli_real_escape_string($con , $contact);
    
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($con , $email);
    
    $email_regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    $contact_regex = "/^[789][0-9]{9}$/";
    
   
   
        $insert_query = "INSERT INTO appointment (date,time,services,technicians,name,contact,email) VALUES ('$date','$time','$services','$technicians','$name','$contact','$email')";
        $inser_query_result = mysqli_query($con , $insert_query) or die(mysqli_error($con));
        $id = mysqli_insert_id($con);
        $_SESSION['id'] = $id;
        $_SESSION['email'] = $email;
        header('location:success.php');
    



?>
