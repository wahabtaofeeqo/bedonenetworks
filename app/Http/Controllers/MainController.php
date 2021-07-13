<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Codenixsv\CoinGeckoApi\CoinGeckoClient;

use App\Testimonials;
use App\Newsletter;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $testimonials = Testimonials::all();
        return view('index', compact('testimonials'));
    }

    public function page($value='')
    {
        // code...
    }

    public function rates()
    {
        $response = array('error' => false, 'message' => 'loaded', 'data' => []);
        try {
            $client = new CoinGeckoClient();
            $data = $client->coins()->getMarkets('usd');
            $response['data'] = $data;
        } catch (Exception $e) {
            $response['error'] = true;
        }

        return response($response);
    }

    public function subscribe(Request $request) {

        $response = array('error' => false, 'message' => 'Thank for subscribing!');
        $email = $request->email;

        $newsletter = Newsletter::where('email', $email)->first();
        if (empty($newsletter)) {
            Newsletter::create([
                'email' => $email]);

            return response($response);
        }

        $response['message'] = 'You already subscribed!';
        return response($response);
    }
}