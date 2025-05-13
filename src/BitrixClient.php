<?php


namespace DevBX\Telegram;

use Bitrix\Main\Web;
use DevBX\Telegram\Base\Error;

class BitrixClient extends \DevBX\Telegram\Api
{

    public function sendRequest(string $url, array $params, Base\BaseObject $result, bool $multipart)
    {
        $client = new Web\HttpClient($this->clientOptions);

        $response = $client->post($url, $params, $multipart);

        if ($response === false) {
            foreach ($client->getError() as $error_code => $error) {
                $result->addErrorItem(new Error($error, $error_code));
            }

            if ($result->isSuccess()) {
                $result->addErrorItem(new Error('Unknown error'));
            }

            return false;
        }

        return $response;
    }

}