<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Redirector;
use App\Shift;
use GuzzleHttp\Client;
use App\Job;

class InternalJobController extends Controller
{
    public function search(Request $request)
    {

       $coords = $this->getLatLngFromZip($request->input('zip'));
       $jobs = Job::all();
       $joblist = [];

       foreach($jobs as $job) {
         $coords2 = $this->getLatLngFromCityState($job->job_city, $job->job_state);
         $distance = $this->haversineDistance($coords['latitude'], $coords['longitude'], $coords2['latitude'], $coords2['longitude']);

         if ($distance <= 20) {
            $joblist[] = $job->job_id;
         }
       }

    

      return view('internal-search')->with('job_list', $joblist);
    }

    public function getLatLngFromZip($zipCode)
    {
    $apiKey = 'ba31785d75004ae09b724420cab5cabb'; 
    $apiUrl = 'https://api.opencagedata.com/geocode/v1/json?';

    $client = new Client();

    $response = $client->get($apiUrl, [
        'query' => [
            'q' => $zipCode,
            'key' => $apiKey,
        ],
    ]);

    $data = json_decode($response->getBody(), true);

    if ($response->getStatusCode() === 200 && isset($data['results'][0]['geometry'])) {
        $latitude = $data['results'][0]['geometry']['lat'];
        $longitude = $data['results'][0]['geometry']['lng'];
        return ['latitude' => $latitude, 'longitude' => $longitude];
    } else {
        return null;
    }
}

public function getLatLngFromCityState($city, $state) {
    $apiKey = 'ba31785d75004ae09b724420cab5cabb';
    $encodedCity = urlencode($city);
    $encodedState = urlencode($state);

    $url = "https://api.opencagedata.com/geocode/v1/json?q={$encodedCity},{$encodedState}&key={$apiKey}";

    $response = file_get_contents($url);
    $responseData = json_decode($response, true);

    if ($responseData['status']['code'] === 200) {
        $latitude = $responseData['results'][0]['geometry']['lat'];
        $longitude = $responseData['results'][0]['geometry']['lng'];

        return ['latitude' => $latitude, 'longitude' => $longitude];
    }

    return null;
}

function haversineDistance($lat1, $lon1, $lat2, $lon2) {
    $lat1 = deg2rad($lat1);
    $lon1 = deg2rad($lon1);
    $lat2 = deg2rad($lat2);
    $lon2 = deg2rad($lon2);

    $radius = 3959;


    $dlat = $lat2 - $lat1;
    $dlon = $lon2 - $lon1;
    $a = sin($dlat/2) ** 2 + cos($lat1) * cos($lat2) * sin($dlon/2) ** 2;
    $c = 2 * atan2(sqrt($a), sqrt(1-$a));
    $distance = $radius * $c;

    return $distance;
}

}

