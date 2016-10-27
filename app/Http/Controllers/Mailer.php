<?php
/**
 * Created by PhpStorm.
 * User: Sabin Maharjan
 * Date: 11/11/2015
 * Time: 10:53 AM
 */

namespace App\Http\Controllers;


class Mailer {
    public function sendTo($email, $subject, $view, $data = array())
    {
        \Mail::queue($view, $data, function($message) use($email, $subject)
        {
            $message->to($email)->subject($subject);
        });
        return "Mail has been sent";

    }
    public function welcome($formData)
    {

        $subject = "User Message was arrived !";
        $data['name'] = $formData['name'];
        $data['email'] = $formData['email'];
        $data['mobile'] = $formData['mobile'];
        $data['subject'] = $formData['subject'];
        $data['bodymessage'] = $formData['message'];
        $view = 'emails.welcome';
        return $this->sendTo(['sabin.maharjan456@gmail.com'],$subject,$view,$data);
    }
}