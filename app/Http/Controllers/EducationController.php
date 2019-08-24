<?php

namespace App\Http\Controllers;


use GuzzleHttp\Client;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Show the education page.
     *
     * @return View
     */
    public function __invoke()
    {

        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://api.github.com/',
        ]);

        $response = $client->request('GET', 'repos/laravel/laravel');

        $data = json_decode($response->getBody()->getContents());

        return view('education',
            ['stars' => $data->stargazers_count,
            'educationBanner' => "/images/banner.svg"]
        );
    }
}
