<?php

    header('Content-type: application/json');
    $status = [
        'type' => 'success',
        'message' => 'Thank you for contact us. As early as possible  we will contact you ',
    ];

    $name = @trim(stripslashes($_POST['name']));
    $email = @trim(stripslashes($_POST['email']));
    $subject = 'Contact form synxlab.id';
    $message = @trim(stripslashes($_POST['message']));

    $email_from = 'support@synxlab.id';
    $email_to = 'rendyadisaputra@gmail.com'; //replace with your email

    $body = 'Name: '.$name."\n\n".'Email: '.$email."\n\n".'Subject: '.$subject."\n\n".'Message: '.$message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;
