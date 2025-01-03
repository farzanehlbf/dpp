<?php

namespace Src\solid\srp;

interface MailerInterface
{

    public function send(Message $message);
}
