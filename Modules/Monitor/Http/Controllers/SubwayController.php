<?php
namespace Modules\Monitor\Http\Controllers;

use Curl;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Monitor\Entities\subwayCity;
use Modules\Monitor\Entities\subwayCityLine;
use Modules\Monitor\Entities\subwayCityLineStation;
use Modules\Monitor\Http\Services\Subway;

class SubwayController extends Controller
{

    public function index()
    {
        //获取开通地铁的城市
        $subway = new Subway();
        $subwayInfo = $subway->getOpenedCity();
        $curl = Curl::init();
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            "User-Agent:Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36",
        ));
        $child = array();
        foreach ($subwayInfo[0] as $key => $value) {
            curl_setopt($curl, CURLOPT_URL, $value);
            $fileContents = curl_exec($curl);
            $encode = mb_detect_encoding($fileContents, array("ASCII","GB2312","GBK","UTF-8"));
            if ($encode != 'UTF-8') {
                $fileContents = mb_convert_encoding($fileContents, 'UTF-8', 'UTF-8,GBK,GB2312,BIG5');
            }
            preg_match_all('/<div class="line-list">.*?<div class="clearfix">/s', $fileContents, $res);
            $result = [];
            foreach ($res[0] as $key1 => $subwayString) {
                $res_info = preg_match('/<a href=".*?\/(?:ditie|metro)\/xl_\d+\.shtml"[^>]*?>(.*?)<\/a>.*?<span>(.*?)<\/span>.*?全程(\d+)站.*?(<div[^>]*?class="station">.*?)<div[^>]*?class="clearfix">/s', $subwayString, $subwayKey);
                if (!$res_info) continue;
                $childStation = array(
                    'station_line' => $subwayKey[1],
                    'station_terminal' => trim($subwayKey[2]),
                    'station_num' => $subwayKey[3]
                );
                $res_info1 = preg_match_all('/<div[^>]*?class="station">.*?<a[^>]*?class="link"[^>]*?>\W+<\/a>/s', $subwayKey[4], $stations);
                if ($res_info1) {
                    $stationArr = [];
                    foreach ($stations[0] as $stationString) {
                        preg_match('/<a[^>]*?class="link"[^>]*?>(.*)<\/a>/s', $stationString, $station);
                        preg_match_all('/地铁(\d+)号线/', $stationString, $transferStation);
                        array_shift($transferStation);
                        $stationArr[] = array(
                            'is_transfer' => array_filter($transferStation) ? 1 : 0,
                            'station_name' => $station[1],
                            'transfer_station' => implode(',', array_reduce($transferStation, 'array_merge', array())),
                        );
                    }
                    $childStation['station_info'] = $stationArr;
                }
                $result[$key1] = $childStation;
            }
            $subwayCity = subwayCity::firstOrCreate([
                'subway_name' => !empty($subwayInfo[1][$key]) ? $subwayInfo[1][$key] : '',
            ]);
            if (!$result) continue;
            foreach ($result as $subwayLineInfo) {
                $subwayCityLine = subwayCityLine::firstOrCreate([
                    'subway_city_id' => $subwayCity->id,
                    'line_name' => $subwayLineInfo['station_line'],
                    'line_terminal' => $subwayLineInfo['station_terminal'],
                    'line_station_number' => $subwayLineInfo['station_num']
                ]);
                if (!$subwayCityLine && empty($subwayLineInfo['station_info'])) continue;
                foreach ($subwayLineInfo['station_info'] as $subwayStation) {
                    subwayCityLineStation::firstOrCreate([
                        'subway_city_line_id' => $subwayCityLine->id,
                        'station_name' => $subwayStation['station_name'],
                        'is_transfer' => $subwayStation['is_transfer'],
                        'transfer_station' => $subwayStation['transfer_station'],
                    ]);
                }
            }
        }
        dd('ok');

//        dd($child[0]);
        foreach ($child[0] as $k3 => $value3) {
            $r = subwayCityLine::firstOrCreate([
                'subway_city_id' => 1,
                'line_name' => $value3['station_line'],
                'line_terminal' => $value3['station_terminal'],
                'line_station_number' => $value3['station_num']
            ]);
            foreach ($value3['station_info'] as $info) {
                subwayCityLineStation::firstOrCreate([
                    'subway_city_line_id' => $r->id,
                    'station_name' => $info['station_name'],
                    'is_transfer' => $info['is_transfer'],
                ]);
            }
        }
        dd('ok');
    }
}