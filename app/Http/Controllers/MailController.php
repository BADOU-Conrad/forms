<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
    public function basic_email($recipientEmail, $recipientName, $senderEmail, $senderName, $messageContent) {
        $data = array('name' => "Virat Gandhi");

        Mail::send(['text' => 'mail'], $data, function($message) use ($recipientEmail, $recipientName, $senderEmail, $senderName, $messageContent) {
            $message->to($recipientEmail, $recipientName)->subject('Laravel Basic Testing Mail');
            $message->from($senderEmail, $senderName);
            $message->body($messageContent); // Set the message content dynamically
        });
        echo __('Basic Email Sent. Check your inbox.');
    }


    public function html_email($recipientEmail, $recipientName, $senderEmail, $senderName, $messageContent) {
        $data = array('name' => "Virat Gandhi");

        Mail::send('mail', $data, function($message) use ($recipientEmail, $recipientName, $senderEmail, $senderName, $messageContent) {
            $message->to($recipientEmail, $recipientName)->subject('Laravel HTML Testing Mail');
            $message->from($senderEmail, $senderName);
            $message->setBody($messageContent, 'text/html'); // Set the HTML message content dynamically
        });
        echo __('HTML Email Sent. Check your inbox.');
    }

    public function attachment_email($recipientEmail, $recipientName, $senderEmail, $senderName, $messageContent) {
        $data = array('name' => "Virat Gandhi");

        Mail::send('mail', $data, function($message) use ($recipientEmail, $recipientName, $senderEmail, $senderName, $messageContent) {
            $message->to($recipientEmail, $recipientName)->subject('Laravel Testing Mail with Attachment');
            $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
            $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
            $message->from($senderEmail, $senderName);
            $message->body($messageContent); // Set the message content dynamically
        });
        echo __('Email Sent with attachment. Check your inbox.');
    }

    public function sendEmail(Request $request) {
        $recipientEmail = $request->input('recipient_email');
        $recipientName = $request->input('recipient_name');
        $senderEmail = $request->input('sender_email');
        $senderName = $request->input('sender_name');
        $messageContent = $request->input('message_content');

        // Appel de la fonction basic_email() avec les données du formulaire
        $this->basic_email($recipientEmail, $recipientName, $senderEmail, $senderName, $messageContent);

        // Appel de la fonction html_email() avec les données du formulaire
       // $this->html_email($recipientEmail, $recipientName, $senderEmail, $senderName, $messageContent);

        // Appel de la fonction attachment_email() avec les données du formulaire
       // $this->attachment_email($recipientEmail, $recipientName, $senderEmail, $senderName, $messageContent);

        // Rediriger ou afficher un message de confirmation à l'utilisateur
        return redirect('/')->with('success', 'Email sent successfully!');
    }

}
