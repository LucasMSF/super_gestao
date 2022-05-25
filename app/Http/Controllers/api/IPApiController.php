<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IPApiController extends Controller
{
    private function getGEOLocation($ip)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "http://api.ipstack.com/" . $ip . "?access_key=" . env('GEOKey') . "&format=1");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $response = json_decode(curl_exec($ch));

        return $response;

    }

    public function getLocation($userIp) {
        $geo = $this->getGEOLocation($userIp);
        return response()->json($geo);
    }
}
