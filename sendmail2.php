<?php
if (isset($_POST['submit'])) {
    $name = $_POST['nAme'];
    $number = $_POST['nUmber'];
    $email = $_POST['eMail'];
    $msg = $_POST['mEssage'];

    $to_email = 'admin@thephoenixquotes.comm';
    $subject = 'ThePhoenixQuotes';
    // $message = '<p>"<strong>This is strong text</strong>" while this is not.</p>';
    $message = "
        <html>
        <body>
        <table>
        <tr>
        <th>Name</th>
        <th>Number</th>
        <th>Email</th>
        <th>Message</th>
        </tr>
        <tr>
        <td>$name</td>
        <td>$number</td>
        <td>$email</td>
        <td>$msg</td>
        </tr>
        </table>
        </body>
        </html>
        ";
        // $message = $name .'<br>'. $number; 
        $headers = 'From: contact@thephoenixquotes.com';
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        
        // Additional headers
        $headers .= 'To: Admin <admin@thephoenixquotes.com>' . "\r\n";
        $headers .= 'From: The Phoenix Quotes <admin@thephoenixquotes.com>' . "\r\n";
    
        // Sending email
        if(mail($to_email, $subject, $message, $headers)){
            // echo 'Your mail has been sent successfully.!';
            header('location:thanks.html');
            // header('Refresh: 0; url=thanks.html');
        } 
        else{
            echo 'Unable to send email. Please try again.';
        }
}
?>