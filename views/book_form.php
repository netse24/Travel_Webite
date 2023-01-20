<?php

   $connection = mysqli_connect('localhost','root','','travels');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guest'];
      $arrivals = $_POST['arrival'];
      $leaving = $_POST['leaving'];

      $request = " insert into book_form(name, email, phone, address, location, guest, arrival, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
      mysqli_query($connection, $request);

      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>