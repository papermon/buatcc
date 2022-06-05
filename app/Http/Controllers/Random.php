<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class Random extends Controller
{
    public function data(Request $req)
    {
        $id = $req->input('id');

        $client = new Client();
        $response = $client->request('GET', 'https://api.boardgameatlas.com/api/search', [
            'query' => [
                'client_id' => 'jX81PB5yeJ',
                'random' => 'true',
                'ids' => $id,
            ]
        ]);

        $data = json_decode($response->getBody());
        return view('random', ['data' => $data->games[0]]);
    }
    //
}
