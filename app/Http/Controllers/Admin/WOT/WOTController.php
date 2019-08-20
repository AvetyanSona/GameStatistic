<?php

namespace App\Http\Controllers\Admin\WOT;

use App\Models\WOTPlayer;
use App\Models\WOTNew;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class WOTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.wot');
    }

    public function show(WOTNew $news,Request $request)
    {
        $news_id = $request->route('id');
        $news_data = $news->where('id',$news_id)->get()->first();
        return view('pages.wot-news-more',['news_data' => $news_data]);
    }

    public function create()
    {
        return view('pages.wot-create-news');
    }
    public function statistics()
    {
        return view('pages.wot-statistics');
    }

    public function news()
    {
        $news = WOTNew::paginate(5);
        return view('pages.wot-news', [
            'news' => $news
        ]);
    }


    public function getUserStats(Request $request)
    {
        $request->validate([
            'nickname' => 'required',
        ]);

        $nickname = $request->nickname;
        $api_key  = config('url_lib.wot.api_key');
        $base_uri = config('url_lib.wot.base_uri');

        $player   = WOTPlayer::where(['nickname' => $nickname])->first();

        $http_client = new Client([
            'base_uri' => $base_uri
        ]);

        if(empty($player)){
            $response = $http_client->request(
                'GET',
                '/wot/account/list/',
                [
                    'query' => [
                        'application_id' => $api_key,
                        'search' => $nickname,
                    ]
                ]
            );
            $response_data = $response->getBody()->getContents();
            $response_data = json_decode($response_data,true);
            $player_id = $response_data['data'][0]['account_id'];

            $player = WOTPlayer::create([
                'nickname'  => $nickname,
                'player_id' => $player_id
            ]);
        }

        $player_id = $player->player_id;

        $response = $http_client->request(
            'GET',
            '/wot/account/info/',
            [
                'query' => [
                    'application_id' => $api_key,
                    'account_id'     => $player_id
                ]
            ]
        );

        $response_data     = $response->getBody()->getContents();
        $response_data     = json_decode($response_data, true);
        $response_data_all = $response_data['data'][$player_id]['statistics']['all'];

        $view = view('pages.wotStatistic')->with('data', $response_data_all)->render();
        return response()->json(['html'=>$view]);
    }
}



