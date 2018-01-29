<?php
namespace Modules\Monitor\Http\Services;

use Curl;

class Subway
{
    private $url = 'http://bj.bendibao.com/ditie/';

    public function getOpenedCity()
    {
        $fileContents = $this->getfileContents();
        preg_match('/已经开通地铁的城市.*?(<a[^>]*?>.*?<\/a>).*?<\/div>/s', $fileContents, $openedString);
        preg_match('/即将开通地铁的城市.*?(<a[^>]*?>.*?<\/a>).*?<\/div>/s', $fileContents, $openingString);
        preg_match_all('/<a.*?href=\"(.*?)\"[^>]*?>(.*?)<\/a>/s', $openedString[0], $opened);
        preg_match_all('/<a.*?href=\"(.*?)\"[^>]*?>(.*?)<\/a>/s', $openingString[0], $opening);

        return array($opened[1], $opened[2], $opening[1], $opening[2]);
    }

    private function getfileContents()
    {
        $curl = Curl::init();
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            "User-Agent:Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36",
        ));
        curl_setopt($curl, CURLOPT_URL, $this->url);
        $fileContents = curl_exec($curl);
        curl_close($curl);
        
        return $fileContents;
    }
}