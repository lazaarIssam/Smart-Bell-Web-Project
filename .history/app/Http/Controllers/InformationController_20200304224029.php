<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class InformationController extends Controller
{
    //
    public function listInfo(){
        //$info = Information::all();
        $client = new Client();
        $res = $client->request('GET', 'https://api.thingspeak.com/channels/1001656/fields/1.json?api_key=Y8RRGNGOEZ1X9EBP&fbclid=IwAR2OAMaI5z6DXhqw07gDmgHgdvgJMYXhmNauxUZnWwICRzvWC379KstaQBY');
        $result = $res->getBody()->getContents();
        $json = json_decode($result);
        dd($json->{'feeds'});
    }
}
