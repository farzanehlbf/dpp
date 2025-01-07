<?php

namespace Src\solid\ISP;

interface Notifier
{
    public function sendSMS();
    public function sendEmail();
    public function sendWebSocket();
}
