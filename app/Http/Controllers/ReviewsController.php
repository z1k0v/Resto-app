<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function show($resto=null) {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://' . config('app.trip_advisor_host') . '/api/v1/restaurant/searchRestaurants?locationId=304554', [
	        'headers' => [
		    'x-rapidapi-host' => config('app.trip_advisor_host'),
		    'x-rapidapi-key' => config('app.trip_advisor_key'),
	    ],
    ]);

        $result = json_decode($response->getBody(), true);
        $reviews = data_get($result, 'data.data');
        //dd($reviews);
        return view("reviews", [
            "reviews"=>$reviews
            ]);
        
    }
    
}
