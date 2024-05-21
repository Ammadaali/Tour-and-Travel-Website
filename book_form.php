<?php
$connection = mysqli_connect('localhost', 'root', '', 'book_db', 3307);

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];
    $package = $_POST['package'];
    $sql = "INSERT INTO book_form(package) VALUES ('$package')";

    $request = "INSERT INTO book_form(name, email, phone, address, guests, arrivals, leaving, package) VALUES ('$name','$email','$phone','$address','$guests','$arrivals','$leaving', '$package') ";

    if (mysqli_query($connection, $request)) {
        // Generate customer ID
        $customerID = generateCustomerID();

        // MailHog configuration
        $smtpHost = 'localhost';
        $smtpPort = 1025;

        // Send email confirmation using MailHog
        $to = $email;
        $subject = "Booking Confirmation";
        $message = "Dear $name,\n\nThank you for your booking! Your customer ID is $customerID. We will contact you shortly with further details.\n\nBest regards,\nThe Tour and Travel Agency";

        // Set the SMTP server configuration
        ini_set('SMTP', 'localhost');
        ini_set('smtp_port', 1025);
        ini_set('sendmail_from', 'ammadali7777@gmail.com');

        // Send the email
        if (mail($to, $subject, $message)) {
            // Email sent successfully
            header('location:book.php?success=true');
            exit();
        } else {
            // Failed to send email
            header('location:book.php?success=false&error=email');
            exit();
        }
    } else {
        header('location:book.php?success=false&error=database');
        exit();
    }
} else {
    header('location:book.php?success=false&error=form');
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
