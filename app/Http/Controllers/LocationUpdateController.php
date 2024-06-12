<?php

namespace App\Http\Controllers;

use App\Models\NewArea;
use App\Models\OldArea;
use App\Models\NewDistrict;
use App\Models\NewDivision;
use App\Models\OldDistrict;
use App\Models\OldDivision;
use Illuminate\Http\Request;

class LocationUpdateController extends Controller
{
    public function index()
    {
        echo 'index';
    }
    public function division()
    {
        $newDivisions = NewDivision::all();
        $i = 0;
        foreach ($newDivisions as $newDivision) {
            //do this in firstOrCreate method if not inserted already
            $newDivision = OldDivision::firstOrCreate([
                'old_id' => $newDivision->id,
                'country_code' => 'in',
                'name' => $newDivision->name,
                'bn_name' => $newDivision->name,
                'slug' => $newDivision->slug,
            ]);
            if ($newDivision->wasRecentlyCreated) {
                $i++;
            }
        }
        dump($i);
    }
    public function district()
    {
        $newDistricts = NewDistrict::all();
        $i = 0;
        foreach ($newDistricts as $newDistrict) {
            //old district store into new district table
            $old_id_of_division = OldDivision::where('old_id', $newDistrict->divisionid)->first()->id;
            // do this in firstOrCreate method if not inserted already
            $newDistrict = OldDistrict::firstOrCreate([
                'old_id' => $newDistrict->id,
                'divisionid' => $old_id_of_division,
                'name' => $newDistrict->name,
                'bn_name' => Null,
                'slug' => $newDistrict->slug,
            ]);
            if ($newDistrict->wasRecentlyCreated) {
                $i++;
            }
        }
        dump($i);
    }
    public function area()
    {
        $newAreas = NewArea::all();
        $i = 0;
        foreach ($newAreas as $newArea) {
            //old area store into new area table
            $old_id_of_district = OldDistrict::where('old_id', $newArea->districtid)->first()->id;
            // do this in firstOrCreate method if not inserted already
            $newArea = OldArea::firstOrCreate([
                'old_id' => $newArea->id,
                'districtid' => $old_id_of_district,
                'name' => $newArea->name,
                'bn_name' => Null,
                'slug' => $newArea->slug,
            ]);
            if ($newArea->wasRecentlyCreated) {
                $i++;
            }
        }
        dump($i);
    }
}
