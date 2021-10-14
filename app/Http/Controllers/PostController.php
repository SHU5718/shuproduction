<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class PostController extends Controller
{
    public function index()
    {

        $url = "https://api.a3rt.recruit.co.jp/text_suggest/v2/predict?apikey=DZZKDP8fwYaKERZNzljBTPuKgFp5RmE7&previous_description=ウマ娘です";
        $method = "GET";

        //接続
        $client = new Client();
        $response = $client->request($method, $url);
        $posts[] = json_decode($response->getBody()->getContents(), true);
        foreach ($posts as $post) {
          if (isset($post['suggestion'])) {
            $suggestion = $post['suggestion'];
          }
        }
        return view('index', ['posts' => $suggestion]);
    }
}
