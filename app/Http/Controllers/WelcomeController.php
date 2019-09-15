<?php

namespace App\Http\Controllers;


use GuzzleHttp\Client;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Show the education page.
     *
     * @return View
     */
    public function __invoke()
    {
        return view('welcome', ['welcomeBanner' => "/images/banner_home-1920.webp"]);
    }
}
