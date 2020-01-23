<?php
 include_once "vendor/autoload.php";

 $text = "Hi!\nHow are you?\n";
 $html = "<html>
       <head></head>
       <body>
           <p>Hi!<br>
               How are you?<br>
           </p>
       </body>
       </html>";
 // This is your From email address
 $from = array('j.overby@comcast.net' => 'Name To Appear');
 // Email recipients
 $to = array(
       'aaronclare88@gmail.com'=>'Destination 1 Name',
 );
 // Email subject
 $subject = 'Example PHP Email';

 // Login credentials
 $username = 'Aaron Clare';
 $password = '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';

 // Setup Swift mailer parameters
 $transport = Swift_SmtpTransport::newInstance('smtp.sendgrid.net', 587);
 $transport->setUsername($username);
 $transport->setPassword($password);
 $swift = Swift_Mailer::newInstance($transport);

 // Create a message (subject)
 $message = new Swift_Message($subject);

 // attach the body of the email
 $message->setFrom($from);
 $message->setBody($html, 'text/html');
 $message->setTo($to);
 $message->addPart($text, 'text/plain');

 // send message
 if ($recipients = $swift->send($message, $failures))
 {
     // This will let us know how many users received this message
     echo 'Message sent out to '.$recipients.' users';
 }
 // something went wrong =(
 else
 {
     echo "Something went wrong - ";
     print_r($failures);
 }

?>