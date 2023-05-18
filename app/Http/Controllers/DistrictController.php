<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function create()
    {
        $districts = District::DISTRICTS;
        foreach ($districts as $district) {

            $item = new District;
            $item->title = $district['title'];
            $item->longitude = $district['longitude'];
            $item->latitude = $district['latitude'];
            $item->save();
        }
        return ("Районы созданы");
    }
    public function getDistrict()
    {
        return response(District::all());
    }
}
