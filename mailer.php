<?php
    if(isset($_POST['submit'])) {
        $name = strip_tags(trim($_POST['input-name']));
        $name = str_replace(array("\r", "\n"), array(" ", " "), $name);
        $email = filter_var(trim($_POST['input-email']), FILTER_SANITIZE_EMAIL);
        $found_us = $_POST['find-us'];
        $message = trim($_POST['message']);

        /* TODO specify receiving email address */
        $mailTo = "";
        $subject = "Message from website";
        $headers = "From: ".$email;
        $txt = "You have received an email from ".$name.".\n\n".$message;
        
        mail($mailTo, $subject, $txt, $headers);

        /* TODO redirect */
        header("Location:");
    }
?>