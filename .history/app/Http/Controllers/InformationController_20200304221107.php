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
        dd($info);
    }
}
