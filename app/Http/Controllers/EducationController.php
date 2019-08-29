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
            'base_uri' => 'https://us-central1-tfg2019-ae3f8.cloudfunctions.net/api/'
        ]);

        $response = $client->request('GET', 'education');
        $data = json_decode($response->getBody()->getContents());

        return view('education',
            ['education' => $data,
            'educationBanner' => "/images/banner_education.jpg"]
        );
    }
}
