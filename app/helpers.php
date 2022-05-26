<?php

use App\Mail\AppMailer;
use Illuminate\Support\Facades\Mail;

function emailNotification($data, $template, $subject, $target)
{
    Mail::to($target)->send(new AppMailer($template, $subject, $data));
    return (Mail::failures());
}
