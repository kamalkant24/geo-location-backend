<?php

namespace App\Http\Controllers\ip;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
class IpLookupController extends Controller
{
    public function getIpDetails(Request $request,$ip)
    {
     
        $ip =  $request->ip; 

        if ($request->has('ip')) {
            $ip = $request->input('ip');
        }

        $apiKey = env('IPINFO_API_KEY');
        $client = new Client();
        try {
            $response = $client->get("http://ip-api.com/json/{$ip}?fields=66846719");
            $data = json_decode($response->getBody(), true);
    
            return response()->json($data);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch IP details'], 500);
        }
    }
}
