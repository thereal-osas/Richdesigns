<?php 
    $name = $_POST['name'];
    $visitor_email= $_POST['email'];
    $title= $_POST['subject'];
    $message= $_POST['message'];

    $email_form = 'noreply@richdesigns.com';
    $email_subject = 'New Form Submission';
    $email_body = 'User Name ='. $name . '\n'.
                    'User Email ='. $visitor_email . '\n'.
                      'User Subject ='. $title . '\n'.
                        'User Message ='. $message;
    $to = "richdesignsglobal@gmail.com";
    $headers = "From: $email_form\r\n;"
    $headers = "Reply-To:$visitor_email\r\n;"
        mail($to,$email_subject,$email_body,$headers);
        header("Location:thankyou.html");

?>