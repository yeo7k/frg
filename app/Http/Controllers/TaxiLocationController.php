<?php

namespace App\Http\Controllers;

use Request;
use Storage;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TaxiLocation;
 use Response;

class TaxiLocationController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function getLocation($id)
    {
        $data= TaxiLocation::where('userid', '=', $id)->firstOrFail();

        return Response::json($data);
    }


     public function setLocation(Request $request)
    {
        $data = Request::json()->all();
       
        $loc= TaxiLocation::where('userid', '=', $data['userid'])->firstOrFail();

       

        $loc->locationX = $data['locationX'];

        $loc->locationY = $data['locationY'];

        $loc->save();
        

        return Response::json($loc);


    }


}
