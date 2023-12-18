<?php



// contact  

add_action('wp_ajax_get_contact_data', 'get_contact_data');
add_action('wp_ajax_nopriv_get_contact_data', 'get_contact_data');

function get_contact_data()
{
    $formdata = [];
    wp_parse_str($_POST['get_contact_data'], $formdata);


    $name = sanitize_text_field($formdata['name']);
    $company_name = sanitize_text_field($formdata['company_name']);
    $email = sanitize_email($formdata['email']);
    $phone = sanitize_text_field($formdata['phone']);
    $message = sanitize_textarea_field($formdata['message']);


    // Compose the email subject and message
    $subject = 'Contact Form Submission';
    $body = "Name: $name\n";
    $body .= "Company Name: $company_name\n"; // Added line
    $body .= "Phone: $phone\n"; // Added line
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";

    // Email headers
    $headers = array('Content-Type: text/html; charset=UTF-8');

    // Replace the following with your Mailtrap SMTP settings
    $mailtrap_username = 'dd723a540dede2';
    $mailtrap_password = '8eb1242054fc0a';
    $mailtrap_host = 'smtp.mailtrap.io';
    $mailtrap_port = 2525;

    // Set up Mailtrap as the mailer
    add_action('phpmailer_init', function ($phpmailer) use ($mailtrap_username, $mailtrap_password, $mailtrap_host, $mailtrap_port) {
        $phpmailer->isSMTP();
        $phpmailer->Host = $mailtrap_host;
        $phpmailer->SMTPAuth = true;
        $phpmailer->Port = $mailtrap_port;
        $phpmailer->Username = $mailtrap_username;
        $phpmailer->Password = $mailtrap_password;
    });

    // Replace 'your_email@example.com' with the actual email address where you want to receive the contact form submissions
    $to = 'your_email@example.com';

    // Send the email
    $mail_sent = wp_mail($to, $subject, $body, $headers);
    if (!$mail_sent) {
        wp_send_json_error("Error sending email");
    } else {
        // Send JSON response
        wp_send_json("Your data has been Submitted");
    }



    wp_die();
}
