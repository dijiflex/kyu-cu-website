<?php
require './././vendor/autoload.php';
use Mailgun\Mailgun;

function sendmail($subject,$to,$message)
{

    // First, instantiate the SDK with your API credentials
    $mg = Mailgun::create('key-fa6dde58116f9566eebd52ad786685b5', 'https://api.mailgun.net/v3/kyucu.co.ke'); // For EU servers
    
    // Now, compose and send your message.
    // $mg->messages()->send($domain, $params);
    $mg->messages()->send('kyucu.co.ke', [
      'from'    => 'KYUCU@kyucu.co.ke',
      'to'      => $to,
      'subject' => $subject,
      'text'    => $message
    ]);
}
