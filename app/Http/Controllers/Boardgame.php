<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class Boardgame extends Controller
{
    //
    function list()
    {
        // https://api.boardgameatlas.com/api/search?pretty=true&client_id=jX81PB5yeJ&order_by=rank&limit=50
        // $limit = $lim->input('limit');
        $client = new Client();
        $response = $client->request('GET', 'https://api.boardgameatlas.com/api/search', [
            'query' => [
                'client_id' => 'jX81PB5yeJ',
                'order_by' => 'rank',
                'limit' => '50',
            ]
        ]);

        $data = json_decode($response->getBody());
        return view('boardgame', ['data' => $data->games]);
    }
}
