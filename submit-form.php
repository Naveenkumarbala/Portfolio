<?php
// Variable Setting
$to = "balanaveen495@gmail.com";
$first_name = $_REQUEST['first_name'];
$email= $_REQUEST['email'];
$subject= $_REQUEST['subject'];
$message= $_REQUEST['message'];

// Check input fields
mail($to, $subject, $message, "From: $first_name <$email>");
echo "<script type='text/javascript'>
    alert('Thank you for contacting me. I will be in touch with you very soon.');
    window.history.go(-1);
    </script>";
?>
