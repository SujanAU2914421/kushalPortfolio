<?php
    if(isset($_POST['submit'])){
        $to_email = 'deecoodeer@gmail.com';
        $subject = $_POST['subject'];
        $message = $_POST['messege'];
        $headers = 'From: '.$_POST['email'];
        $secure_check = sanitize_my_email($to_email);
        if ($secure_check == false) {
            echo "Failed to send";
        } else { //send email 
            mail($to_email, $subject, $message, $headers);
        }
    }
    function sanitize_my_email($field) {
        $field = filter_var($field, FILTER_SANITIZE_EMAIL);
        if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }
?>
