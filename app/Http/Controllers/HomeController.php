<?php
//
//namespace App\Http\Controllers;
//
//use Illuminate\Http\Request;
//use GuzzleHttp\Client;
//use Illuminate\Support\Facades\Response;
//
//class HomeController extends Controller
//{
//    /**
//     * Create a new controller instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
//
//    /**
//     * Show the application dashboard.
//     *
//     * @return \Illuminate\Contracts\Support\Renderable
//     */
//    public function index()
//    {
////        $api_key = 'd00509e8cfb3526956573d9e72778340';
////        $api_url = 'http://api.openweathermap.org/data/2.5/weather?';
////
//////        $curl_headers = curl_init();
////        $api_url_params = [
////            'q'     => 'Yerevan',
////            'APPID' => $api_key
////            ];
////            $query = http_build_query($api_url_params);
//    //
//    //        curl_setopt_array($curl_headers, [
//    //            CURLOPT_URL            => $api_url . $query,
//    //            CURLOPT_RETURNTRANSFER => true,
//    //            CURLOPT_CONNECTTIMEOUT => 15,
//    //            CURLOPT_TIMEOUT        => 30,
//    //            CURLOPT_SSL_VERIFYPEER => 0,
//    //        ]);
//    //
//    //        $curl_request = curl_exec($curl_headers);
//    //
//    //        dd(json_decode($curl_request, true));
//    //
//    //        return (curl_errno($curl_headers) == 0 && !empty($curl_request))
//    //            ? @json_decode($curl_request, true)
//    //            : false;
//
////
////        $http_client = new Client();
////        $response    = $http_client->request('GET',$api_url . $query);
////
////        dd(json_decode($response->getBody()->getContents(), true));
//
//        return view('layouts.admin');
//    }
//}
