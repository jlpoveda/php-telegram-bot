<?php
//Composer Loader
$loader = require __DIR__.'/vendor/autoload.php';

$API_KEY = '146668771:AAE9_zVF-YnDco0RcR-xxycUXeh1Cs15E6o';
$BOT_NAME = 'OfertixItBot';
//$COMMANDS_FOLDER = __DIR__.'/Commands/';
//$credentials = array('host'=>'localhost', 'user'=>'dbuser', 'password'=>'dbpass', 'database'=>'dbname');

try {
    // create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);

    //Options

    //$telegram->enableMySQL($credentials);
    //$telegram->enableMySQL($credentials, $BOT_NAME.'_');
    //$telegram->addCommandsPath($COMMANDS_FOLDER);
    // here you can set some command specified parameters,
    // for example, google geocode/timezone api key for date command:
    //$telegram->setCommandConfig('date', array('google_api_key'=>'your_google_api_key_here'));
    //$telegram->setLogRequests(true);
    //$telegram->setLogPath($BOT_NAME.'.log');
    //$telegram->setLogVerbosity(4);

    //$telegram->setDownloadPath("../Download");
    //$telegram->setUploadPath("../Upload");
    // handle telegram webhook request
    $telegram->handle();
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    echo $e;
}
