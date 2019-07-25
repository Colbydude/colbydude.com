<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\Http\Response
     */
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

        return view('pages.home', compact('activities', 'featured'));
    }

    /**
     * Display the code page.
     *
     * @return \Illuminate\Http\Response
     */
    public function code()
    {
        $showcase = config('code.showcase');

        return view('pages.code', compact('showcase'));
    }

    /**
     * Display the games page.
     *
     * @return \Illuminate\Http\Response
     */
    public function games()
    {
        return redirect('code');
    }

    /**
     * Display the music page.
     *
     * @return \Illuminate\Http\Response
     */
    public function music()
    {
        $allAlbums = json_decode(Storage::get('music/albums.json'));
        $albums = array_filter($allAlbums, function ($album) {
            return $album->album_type == 'album';
        });
        $singles = array_filter($allAlbums, function ($album) {
            return $album->album_type == 'single';
        });
        $latestRelease = Arr::first($allAlbums);

        $guitars = config('music.guitars');
        $services = config('music.services');
        $topTracks = array_slice(json_decode(Storage::get('music/top-tracks.json')), 0, 5, true);

        return view('pages.music', compact('albums', 'guitars', 'latestRelease', 'singles', 'services', 'topTracks'));
    }

    /**
     * Redirect to my PayPal link.
     *
     * @return \Illuminate\Http\Response
     */
    public function payment()
    {
        return redirect('http://goo.gl/zCfbmn');
    }

    /**
     * Display thank you page after successful payment/donation.
     *
     * @return \Illuminate\Http\Response
     */
    public function paymentSuccess()
    {
        return view('pages.payment.success');
    }

    /**
     * Handle contact form submission. Send email with contents.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postContact(Request $request)
    {
        request()->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string',
            'comments' => 'required|string',
            'g-recaptcha-response' => 'required|recaptcha',
        ]);

        Mail::send('emails.contact', ['input' => $request->all()], function ($message) use ($request) {
            $message->to(config('mail.contact.address'), config('mail.contact.name'));
            $message->from($request->input('email'), $request->input('name'));
            $message->subject($request->input('subject') . ' Message from ' . $request->input('name'));
        });

        Log::info($request->input('subject') . ' Message from ' . $request->input('name') . '. IP: ' . $_SERVER['REMOTE_ADDR']);

        flash('Your message was sent. I\'ll get back to you as soon as possible!', 'info');

        return redirect('/');
    }

    /**
     * Store the newly selected style to the session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateStyle(Request $request)
    {
        session(['style' => $request->input('style')]);

        return response()->json(['style' => $request->input('style')], 200);
    }

    /**
     * Display the web page.
     *
     * @return \Illuminate\Http\Response
     */
    public function web()
    {
        return redirect('code');
    }
}
