<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    /**
     * Display my gamedev-oriented portfolio.
     *
     * @return \Illuminate\Http\Response
     */
    public function gamedev()
    {
        return view('pages.portfolio.gamedev');
    }

    /**
     * Display my webdev-oriented portfolio.
     *
     * @return \Illuminate\Http\Response
     */
    public function webdev()
    {
        return view('pages.portfolio.webdev');
    }
}
