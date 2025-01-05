<?php

namespace Src\solid\srp;

class ConfirmationMailFactory
{
    private $translator;
    private $templating;

    /**
     * @param $translator
     * @param $templating
     */
    public function __construct(TranslatorInterface $translator,TemplatingEnginInterface $templating)
    {
        $this->translator = $translator;
        $this->templating = $templating;
    }


    public function createMessageFor(User $user):Message
    {
        $subject=$this->translator->translate('please confirm your email address');
        $body=$this->templating->render('email.confirm',[
            'confirm_code'=>$user->getCOnfirmCode()
        ]);
        return new Message($subject,$body,$user->getEmaiAddress());
    }

}
