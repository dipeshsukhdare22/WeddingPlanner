<?php

$connection =mysqli_connect('localhost', 'root', '', 'contact_db' );

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contactnumber = $_POST['contactnumber'];
    $address = $_POST['address'];
    $date = $_POST['date']
    $location = $_POST['location']
    $message = $_POST['message'];

    $request ="insert into contact_form(name,email,contactnumber,address,date,location,message) values('$name','$email','$contactnumber','$address','$date','$location','$message')";
    mysqli_query($connection, $request);
    header('location:index.html');

}else{
    echo 'Something went wrong please try again!';
}
?>