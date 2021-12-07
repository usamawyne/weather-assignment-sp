<?php

namespace App\Http\Controllers;

use Stevebauman\Location\Facades\Location;
use RakibDevs\Weather\Weather;

use Dnsimmons\OpenWeather\OpenWeather;
use GuzzleHttp\Client;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(Request $request)
    {
        $longitude = $request->longitude;
        $latitude = $request->latitude;

        $info = '';
        if($longitude != null && $latitude != null)
        {
            $wt = new Weather();
            $info = $wt->getCurrentByCord($longitude, $latitude);
        }
        // dd($info);
        return view('weather',  compact('info'));
    }
}
