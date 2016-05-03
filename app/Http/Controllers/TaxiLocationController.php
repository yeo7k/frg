<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

        $loc= TaxiLocation::where('userid', '=', $request->userid)->firstOrFail();

        

        $loc->locationX = $request->locX;

        $loc->locationY = $request->locY;

        $loc->save();
        

        return Response::json($loc);
    }


}
