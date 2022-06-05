<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class Search extends Controller
{
    public function __construct()
    {
        $this->middleware('xml');
    }

    function index(Request $req)
    {
        $page = $req->input('page');
        $skip = 0;
        if ($page) {
            $skip = $page * 30;
        }
        $name = $req->input('search');

        $client = new Client();
        $response = $client->request('GET', 'https://api.boardgameatlas.com/api/search', [
            'query' => [
                'client_id' => 'jX81PB5yeJ',
                'name' => $name,
                'skip' => $skip,
            ]
        ]);

        $data = json_decode($response->getBody());
        return view('search', ['data' => $data->games, 'page' => $page, 'search' => $name]);
    }
}
