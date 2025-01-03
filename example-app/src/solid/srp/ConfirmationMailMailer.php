<?php

namespace Src\solid\srp;


class ConfirmationMailMailer
{
    private $templating; //رندر کردن متن ایمیل
    private $translator;//ترجمه کردن متن ایمیل
    private $mailer;// فرستادن ایمیل

    /**
     * @param $templating
     * @param $translator
     * @param $mailer
     */
    public function __construct(
        TemplatingEnginInterface $templating,
        TranslatorInterface $translator,
        MailerInterface    $mailer)
    {
        $this->templating = $templating;
        $this->translator = $translator;
        $this->mailer = $mailer;
    }

    public function sendTo(User $user)
    {
        $message=$this->createMessageFor($user);
        $this->sendMessage($message);

    }


    private function createMessageFor(User $user):Message
    {
        $subject=$this->translator->translate('please confirm your email address');
        $body=$this->templating->render('email.confirm',[
            'confirm_code'=>$user->getCOnfirmCode()
        ]);
        return new Message($subject,$body,$user->getEmaiAddress());
    }

    private function sendMessage(Message $message)
    {
        $this->mailer->send($message);
    }


}
