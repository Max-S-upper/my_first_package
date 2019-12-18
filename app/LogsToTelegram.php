<?php

namespace my_package\app;

use DateTimeZone;

class LogsToTelegram extends \Monolog\Logger
{
    private $chat_id = 438541749;
    private $API = "1011629320:AAG1e3fog_JStOnuETCQLeSZin3wjrW_mp8";
    public function setTelegramReceiver($chat_id, $API) {
        $this->chat_id = $chat_id;
        $this->API = $API;
    }

    public function sendLog($message)
    {
        $url = "https://api.telegram.org/bot".$this->API."/sendMessage?chat_id=".$this->chat_id."&text=".urlencode($message);
        $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
        );

        $ch = curl_init();
        curl_setopt_array($ch, $optArray);
        $result = curl_exec($ch);
        curl_close($ch);
    }

    public function info($message, array $context = []): void
    {
        $this->sendLog($message);
    }

    public function debug($message, array $context = []): void
    {
        $this->sendLog($message);
    }

    public function notice($message, array $context = []): void
    {
        $this->sendLog($message);
    }

    public function warning($message, array $context = []): void
    {
        $this->sendLog($message);
    }

    public function error($message, array $context = []): void
    {
        $this->sendLog($message);
    }

    public function alert($message, array $context = []): void
    {
        $this->sendLog($message);
    }

    public function emergency($message, array $context = []): void
    {
        $this->sendLog($message);
    }
}