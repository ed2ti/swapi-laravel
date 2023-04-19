<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;


class swapiController extends Controller
{
    public function show($resource = '', $param = 1)
    {
        if ($resource == '') {
            return view('pages.index');
        } else {
            $url    = 'https://swapi.dev/api/' . $resource . '/?page=' . $param;
            $result = Http::get($url)->json();
            $total  = $result['count'];
            if ($total % 10 > 0) {
                $pages  = intval(($total / 10) + 1);
            } else {
                $pages  = $total / 10;
            }
            $list   = $result['results'];
            return view('pages.' . $resource, ['list' => $list, 'page' => $param, 'pages' => $pages, 'resource' => $resource]);
        }
    }
    public function search(Request $request){
        if ($request->search==''){return view('pages.index'); die();}
        $url    = 'https://swapi.dev/api/'.$request->resource.'/?search=' . $request->search;
        $result = Http::get($url)->json();
        $total  = $result['count'];
        if ($total % 10 > 0) {
            $pages  = intval(($total / 10) + 1);
        } else {
            $pages  = $total / 10;
        }
        $list   = $result['results'];
        return view('pages.' . $request->resource, ['list' => $list,  'page' => 1, 'pages' => $pages, 'resource' => $request->resource]);
    }
}
