<?php
//Composer Loader
$loader = require __DIR__.'/vendor/autoload.php';

$API_KEY = '146668771:AAE9_zVF-YnDco0RcR-xxycUXeh1Cs15E6o';
$BOT_NAME = 'OfertixItBot';
$link = 'https://backoffice.ofertix.com/php-telegram-bot/hook.php';
try {
    // create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);
    // set webhook
    $result = $telegram->setWebHook($link);
    //Uncomment to use certificate
    //$result = $telegram->setWebHook($link, $path_certificate);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    echo $e;
}
