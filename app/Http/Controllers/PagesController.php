<?php

namespace App\Http\Controllers;

use Flash;
use Input;
use Log;
use Mail;

class PagesController extends Controller
{
    public function __construct()
    {
        // If the style isn't set, we'll set it here, and share across all views.
        //session()->regenerate();
        if (!session()->has('style')) {
            $rand = rand(0, 1);
            if ($rand == 0) {
                session(['style' => 'dark']);
            } else {
                session(['style' => 'light']);
            }
        }

        // Because Windows renders icon fonts badly.
        if (strpos($_SERVER["HTTP_USER_AGENT"], "Windows") !== false) {
            $windows = "windows";
        } else {
            $windows = "not-windows";
        }

        view()->share('style', session('style'));
        view()->share('windows', $windows);
    }

    public function home()
    {
        $activities = null;
        $featured = null;

        if (file_exists('json/activities.json')) {
            $activities = json_decode(file_get_contents('json/activities.json'), true);
        }

        if (file_exists('json/featured.json')) {
            $featured = json_decode(file_get_contents('json/featured.json'), true);
        }

        return view('pages.home')->with(compact('activities', 'featured'));
    }

    public function games()
    {
        $games = null;

        if (file_exists('json/games.json')) {
            $games = json_decode(file_get_contents('json/games.json'), true);
        }

        return view('pages.games')->with(compact('games'));
    }

    public function music()
    {
        $music = null;

        if (file_exists('json/music.json')) {
            $music = json_decode(file_get_contents('json/music.json'), true);
        }

        return view('pages.music')->with(compact('music'));
    }

    public function payment()
    {
        return redirect('http://goo.gl/zCfbmn');
    }

    public function paymentSuccess()
    {
        return view('pages.payment.success');
    }

    public function postContact()
    {
        Mail::send('emails.contact', ['input' => Input::all()], function ($message) {
            $message->to('colbydude@voidteam.net', 'Colby Terry');
            $message->from(Input::get('email'), Input::get('name'));
            $message->subject(Input::get('subject').' Message from '.Input::get('name'));
        });

        Log::info(Input::get('subject').' Message from '.Input::get('name').'. IP: '.$_SERVER['REMOTE_ADDR']);

        Flash::message('Your message was sent. I\'ll get back to you as soon as possible!');
        return redirect('/');
    }

    public function web()
    {
        $websites = null;

        if (file_exists('json/websites.json')) {
            $websites = json_decode(file_get_contents('json/websites.json'), true);
        }

        return view('pages.web')->with(compact('websites'));
    }
}
