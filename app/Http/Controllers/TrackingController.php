<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrackingController extends Controller {

    public function displayTrackingID(Request $request) {

         //return "The tracking number is: " . $request->trackid;
         // if (isset($request->trackid)) {
         //   $tracking_no = $request->trackid
         // } else {
         //   $tracking_no = null;
         // }

         $tracking_no = $request->trackid;

         return view('welcome', compact('tracking_no'));

    }

}
