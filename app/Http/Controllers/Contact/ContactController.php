<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Mail;
use \Swift_SmtpTransport,\Swift_Mailer,\Swift_Message;

class ContactController extends Controller
{
    
    
    /***public function __construct()
    {
        //$this->middleware('guest')->except('destroy');
    }*/

	public function contactus()
    {
		// Create the Transport
        $transport = (new Swift_SmtpTransport('ssl://smtp.gmail.com', 465))
                   ->setUsername('theyummyapp.service@gmail.com')
                   ->setPassword('')
        ;

        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);
        
		// do anything else you need here, like send an email
		$name = isset($_POST["name"]) && !empty($_POST["name"]) ? $_POST["name"] : false;
		$adress = isset($_POST["email"]) && !empty($_POST["email"]) ? $_POST["email"] : false;
		$subject = isset($_POST["subject"]) && !empty($_POST["subject"]) ? $_POST["subject"] : false;
		$msg = isset($_POST["message"]) && !empty($_POST["message"]) ? $_POST["message"] : false;
		
		switch (false) {
          case $name:
            return redirect('/contact');
            break;
          case $adress:
            return redirect('/contact');
            break;
		  case $subject:
            return redirect('/contact');
            break;
		  case $msg:
            return redirect('/contact');
            break;
          default:
            // Create a message
            $message = (new Swift_Message($subject))
                     ->setFrom(['theyummyapp.service@gmail.com' => 'Yummy'])
                     ->setTo(['opyus@yahoo.it'])
                     ->setBody('<p>From <strong>'.$name.' </strong><br>The email adress is: <strong>'.$adress.'</strong><br><br>'.$msg.'</p>', 'text/html')
            ;

            // Send the message
            $result = $mailer->send($message);

        
            return redirect('/');
        }
    }
	
}
