<?php 

namespace  Infrastructure\Libraries;

use App\Models\User;

class Mail
{
    private $sender_name;
    public function sendMailForgotPassword($options)
    {
        $email      = $options['email'];
        $link       = $options['link'];
        $params = array(
            'email'      => $email,
            'subject'   => 'Mail Forgot Password',
            'data'       => ['link' => $link],
            'body'       => 'client.mails.forgotpass'
        );
        $this->processMail($params);
    }
    

    public function processMail($arrParams)
    {
        \Mail::send($arrParams['body'], ['options' => @$arrParams['data']], function ($message) use ($arrParams) {
            $message->to($arrParams['email'])
                ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
                ->subject($arrParams['subject']);

            if (@$arrParams['listFile']) {
                foreach ($arrParams['listFile'] as $item) {
                    $message->attach($item);
                }
            }
        });
    }

    
}
