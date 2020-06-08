<?php

namespace App\Http\Controllers\Newsletters;

use App\Http\Controllers\Controller;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\UrlGenerator;
use \Swift_SmtpTransport,\Swift_Mailer,\Swift_Message;

class NewslettersController extends Controller
{
   

    /**
     * Where to redirect after subscribing.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
       
    }*/
    
	
	/*** Send confirmation subscribing */
	public function getNewsletters()
    {
		$url = url("/newsletters"); 
		// Create the Transport
        $transport = (new Swift_SmtpTransport('ssl://smtp.gmail.com', 465))
                   ->setUsername('theyummyapp.service@gmail.com')
                   ->setPassword('')
        ;

        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);
		
		
		if ( isset($_POST["email"]) && !empty($_POST["email"]) ? $_POST["email"] : false ) {  
            $email = $_POST["email"];	
            $created = date("Y-m-d H:i:s");
			$updated = date("Y-m-d H:i:s");
			
            DB::table('newsletters')->insert([
                  ['email' => $email, 'created_at' => $created, 'updated_at' => $updated]
            ]);			
			// Create a message
            $message = (new Swift_Message('Subscription to Yummy Newsletters'))
                     ->setFrom(['theyummyapp.service@gmail.com' => 'Yummy'])
                     ->setTo([$email])
                     ->setBody('<p>Welcome to Yummy!</p></br><p>You are subscribed to the newsletters with this email: <strong>'.$email.'</strong></p>
					            </br><p><small>If you want to unsubscribe from newsletters click on <a href="'.$url.'"> Unsubscribe </a></small></p>', 'text/html')
            ;

            // Send the message
            $result = $mailer->send($message);
			
			return redirect($this->redirectTo);
		} else {
			return view('errors.min_500');
			
		}
    }
	
	/*** Send confirmation subscribing */
	public function delNewsletters()
    {
		// Create the Transport
        $transport = (new Swift_SmtpTransport('ssl://smtp.gmail.com', 465))
                   ->setUsername('theyummyapp.service@gmail.com')
                   ->setPassword('')
        ;

        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);
		
		
		if ( isset($_POST["email"]) && !empty($_POST["email"]) ? $_POST["email"] : false ) {
			
            $email = $_POST["email"];	
				
            DB::table('newsletters')->where('email', '=', $email)->delete();	
			
			// Create a message
            $message = (new Swift_Message('Delete the subscription to Yummy Newsletters'))
                     ->setFrom(['theyummyapp.service@gmail.com' => 'Yummy'])
                     ->setTo([$email])
                     ->setBody('<p>Hello.</p></br><p>You are unsubscribed from the newsletters with this email: <strong>'.$email.'</strong></p>', 'text/html')
            ;

            // Send the message
            $result = $mailer->send($message);
			
			return redirect($this->redirectTo);
		} else {
			return view('errors.min_500');
			
		}
    }
}
