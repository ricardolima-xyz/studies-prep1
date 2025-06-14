<?php

declare(strict_types=1);
require_once __DIR__ . '/vendor/autoload.php';

use App\Service\Notifier;
use App\Notification\EmailSender;
use App\Adapter\SMSAdapter;
use App\Legacy\ThirdPartySMS;
use App\Adapter\SlackAdapter;
use App\Legacy\SlackSDK;


// Send via email
$emailSender = new EmailSender();
$emailNotifier = new Notifier($emailSender);
$emailNotifier->alert("You've got mail!");

// Send via SMS using the adapter
$sms = new ThirdPartySMS();
$smsAdapter = new SMSAdapter($sms);
$smsNotifier = new Notifier($smsAdapter);
$smsNotifier->alert("Your package has shipped!");

// Send via Slack using the adapter
$slack = new SlackSDK();
$slackAdapter = new SlackAdapter($slack);
$slackNotifier = new Notifier($slackAdapter);
$slackNotifier->alert("Server load at 85%!");

