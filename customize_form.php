<?php
   $connection = mysqli_connect('localhost','root','','yumna_db', 3307);

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $guests = $_POST['guests'];
      // Retrieve the selected country and cities
      $country = $_POST['country'];
      $selectedCities = isset($_POST['city']) ? (array)$_POST['city'] : [];
  
      // Combine the selected cities into a string
      $cities = implode(', ', $selectedCities);
      $numDays = intval($_POST['num-days']);
      $numNights = intval($_POST['num-nights']);
      $totalExpense = 5 * ($numDays + $numNights);



      $arrivals = $_POST['arrivals'];
      $standard = $_POST['standard'];

      $requirements = $_POST['requirements'];

      // Prepare and execute the SQL query to insert the data into the database
      $request = "insert into customize_form (name, email, phone, address, guests, country, cities, num_days, num_nights, total_expense, arrivals, standard, requirements)
                  VALUES ('$name', '$email', '$phone', '$address', '$guests', '$country', '$cities', '$numDays', '$numNights', '$totalExpense', '$arrivals', '$standard', '$requirements')";

      if (mysqli_query($connection, $request)) {
         // Generate customer ID
         $customerID = generateCustomerID();

         // MailHog configuration
         $smtpHost = 'localhost';
         $smtpPort = 1025;

         // Send email confirmation using MailHog
         $to = $email;
         $subject = "Booking Confirmation";
         $message = "Dear $name,\n\nThank you for your Request Plan! Your Customer Tocken Number is $customerID and your Total expense is $totalExpense. We will contact you shortly with further details.\n\nBest regards,\nThe Tour and Travel Agency";

         // Set the SMTP server configuration
         ini_set('SMTP', 'localhost');
         ini_set('smtp_port', 1025);
         ini_set('sendmail_from', 'ammadali7777@gmail.com');

         // Send the email
         if (mail($to, $subject, $message)) {
             // Email sent successfully
             header('location:customize.php?success=true');
             exit();
         } else {
             // Failed to send email
             header('location:customize.php?success=false&error=email');
             exit();
         }
     } else {
         header('location:customize.php?success=false&error=database');
         exit();
     }
 } else {
     header('location:customize.php?success=false&error=form');
     exit();
 }
 
 function generateCustomerID()
 {
     // Generate a unique customer ID
     // You can implement your own logic here to generate the ID
     // For simplicity, let's generate a random 6-digit number
     return rand(100000, 999999);
 }
?>