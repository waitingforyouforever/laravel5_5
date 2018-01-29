<?php
namespace App\Gateway;

class Curl{
    
    public function init()
    {
        $curl = curl_init();

        curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt ($curl, CURLOPT_CONNECTTIMEOUT, 5);

        return $curl;
    }
}