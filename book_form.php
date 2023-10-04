<?php

    $connection = mysqli_connect('localhost','roots','','book_db');

    if(isset($_POST['send'])){
        $name = $POST['name'];
        $email = $POST['email'];
        $phone = $POST['phone'];
        $address = $POST['address'];
        $location = $POST['location'];
        $guests = $POST['guests'];
        $arrivals = $POST['arrivals'];
        $leaving = $POST['leaving'];

        $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) 
        values ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

        mysqli_query($connection, $request);

        header('location:book.php');
    }else{
        echo 'something went wrong try again';
    }

?>