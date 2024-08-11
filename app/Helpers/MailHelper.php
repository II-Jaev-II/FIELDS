<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Config;

class MailHelper
{
    public static function setMailConfig($account)
    {
        $config = config("services.mail_accounts.$account");

        Config::set('mail.mailer', $config['driver']);
        Config::set('mail.host', $config['host']);
        Config::set('mail.port', $config['port']);
        Config::set('mail.username', $config['username']);
        Config::set('mail.password', $config['password']);
        Config::set('mail.encryption', $config['encryption']);
        Config::set('mail.from.address', $config['from']['address']);
        Config::set('mail.from.name', $config['from']['name']);
    }
}
