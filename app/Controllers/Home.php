<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $params, $accessToken;
    protected $picture, $video;
    public function __construct()
    {
        // Instagram
        $accessToken = 'IGQVJXOHppcDBjT2xFZAnhZAVlRSTTRWTVJrZAHJXWUhtZAjUxajVBNTNjZAFRWTXYzbUdSZAWdtZAHN5VFRxbjlsSFZAoVS1CeVlaenhpZA1lJNjlHMnFwQlRFODZAuNkt2clp2UkplY212RVhsdzNfUXR6dE4wUgZDZD';
        $params = array(
            'get_code' => isset($_GET['code']) ? $_GET['code'] : '',
            'access_token' => $accessToken,
            'user_id' => '8612125442162263'
        );
        $this->ig = new \App\Models\Instagram_access($params);

        // Youtube

        $this->picture = 'https://youtube.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UC3dm9iTviPqqslD02_F7Rkw&key=AIzaSyA7oipqenXErbT3CzA8x1aqu09Tyl5lHyQ';

        $this->video = 'https://youtube.googleapis.com/youtube/v3/search?key=AIzaSyA7oipqenXErbT3CzA8x1aqu09Tyl5lHyQ&channelId=UC3dm9iTviPqqslD02_F7Rkw&order=date&type=video&maxResults=6&part=snippet';


        $this->youtube = new \App\Models\YoutubeModels();
        $this->KategoriModels  = new \App\Models\KategoriModels();
    }


    public function index()
    {
        $data = [
            'title' => "Katalog",
            'kategori' => $this->KategoriModels->findAll(),
            'instagram' => $this->ig->getUsersMedia(),
            'yt_pic' => $this->youtube->get_CURL($this->picture)['items'][0],
            'yt_vid' => $this->youtube->get_CURL($this->video)['items'],
        ];
        // dd($data['instagram']);
        return view('Home/index', $data);
    }

    public function about_us()
    {
        return view('Home/about_us');
    }

    public function contact()
    {
        return view('Home/contact');
    }
}
