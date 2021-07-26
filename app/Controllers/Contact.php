<?php 
namespace App\Controllers;
use App\Models\FormModel;
use CodeIgniter\Controller;

class Contact extends Controller
{

    public function index() 
	{
        return view('contact');
    }

    function sendMail() { 
        $to = $this->request->getVar('email');
        $subject = $this->request->getVar('subject');
        $message = $this->request->getVar('message');
        
        $email = \Config\Services::email();

        $email->setTo($to);
        $email->setFrom('connexar2021@gmail.com');
        
        $email->setSubject($subject);
        $email->setMessage($message);

        if ($email->send()) 
		{
            $msg = 'Email successfully sent';
        } 
		else 
		{
            $data = $email->printDebugger(['headers']);
            //print_r($data);
	    $msg ='Email send failed';
        }
		return redirect()->to( base_url('contact') )->with('msg', $msg);
    }

}