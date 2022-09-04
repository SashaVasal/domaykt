<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\Flat_collection;
use App\Http\Resources\Flat_resource;
use App\Http\Resources\House_resource;
use App\Http\Resources\Stroy_resource;
use App\Models\Flat;
use App\Models\House;
use App\Models\Stroy;
use Illuminate\Http\Request;

class User_controller extends Controller
{
    //
    public function info_about_flat($flat_id): Flat_resource
    {
        return Flat_resource::make(Flat::query()->find($flat_id));
    }

    public function stroy($stroy_id): Stroy_resource
    {
        return Stroy_resource::make(Stroy::query()->find($stroy_id));
    }

    public function house($house_id){
        return House_resource::make(House::query()->find($house_id));
    }

    public function flats_from_house($house_id){
        return Flat_collection::collection(Flat::query()->where('house_id',$house_id)->get());
    }
}
