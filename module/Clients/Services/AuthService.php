<?php

namespace Module\Clients\Services;

use Infrastructure\Libraries\Mail;
use Illuminate\Support\Str;
use Module\Users\Repositories\UserRepository;
class AuthService
{
    protected $mail;

    protected $userRepository;

    public function __construct( Mail $mail, UserRepository $userRepository)
    {
        $this->mail = $mail;
        $this->userRepository = $userRepository;
    }

    public function sendMailForgotPassword($email)
    {
        $user = $this->userRepository->getModel()->where('email',$email);
        $token = base64_encode((string)Str::uuid());
        $user->update(['token_forgot_password' => $token]);
        $option  = [
            'email'      => $email,
            'token'      => $token,
            'link'       => 'http://laravel-training.local:81/reset_password?token='.$token
        ];
        $this->mail->sendMailForgotPassword($option);
    }

    public function doForgotPassword($token, $password)
    {
      $this->userRepository->getModel()->where('token_forgot_password', $token)->update(['password'=> bcrypt($password)]);
    }
}