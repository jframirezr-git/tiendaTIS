<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Item;

class ServiceController extends Controller
{

    // Implementación del servicio para proveer lista de productos
    public function getItem(){
        $items = Item::all();
        return response()->json($items);
    }

    public function getServiceGroup1(){
        {
            $client = new Client([
                'base_uri' => 'http://forotechsolver.tk',
                'timeout' => 2.0,
            ]);
            $response = $client->request('GET', "public/api/v3/posts", ['verify' => false]);
            $data = json_decode($response->getBody()->getContents());
            $games = $data->data;
            return view('groupOne.show', compact('games'));
        }
    }

}
