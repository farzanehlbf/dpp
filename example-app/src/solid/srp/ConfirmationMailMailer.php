<?php

namespace Src\solid\srp;


class ConfirmationMailMailer
{

    private $mailer;// فرستادن ایمیل
    private $confirmationMailFactory;

    /**
     * @param $mailer
     * @param $confirmationMailFactory
     */
    public function __construct(

        MailerInterface    $mailer,
        ConfirmationMailFactory $confirmationMailFactory
    )
    {

        $this->mailer = $mailer;
        $this->confirmationMailFactory = $confirmationMailFactory;
    }

    public function sendTo(User $user)
    {
        $message=$this->createMessageFor($user);
        $this->sendMessage($message);

    }
    public function createMessageFor(User $user):Message
    {
        return $this->confirmationMailFactory->createMessageFor($user);
    }



    private function sendMessage(Message $message)
    {
        $this->mailer->send($message);
    }


}
