<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    /**
     * Redirect to the code page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('code');
    }

    /**
     * Display my gamedev-oriented portfolio.
     *
     * @return \Illuminate\Http\Response
     */
    public function gamedev()
    {
        return view('pages.portfolio.gamedev');
    }
}
