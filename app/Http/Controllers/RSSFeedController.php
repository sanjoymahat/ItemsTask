<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RSSFeedController extends Controller
{
    public function setFeed()
    {
        $response = Http::get('https://timesofindia.indiatimes.com/rssfeeds/-2128838597.cms?feedtype=json');
        $data = $response->json();

        // Extract required data from JSON
        $items = $data['channel']['item'];

        return response()->json($items);
    }
}
