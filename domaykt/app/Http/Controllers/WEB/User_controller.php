<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\Flat;
use App\Models\House;
use Illuminate\Http\Request;


class User_controller extends Controller
{
    //
    public function welcome_page(){
        return view('welcome',['houses' =>House::all()]);
    }

    public function see_house($id){
        $flats = Flat::query()->where('house_id',$id)->get();
        return view('User.see_house',[
            'flats'=>$flats
        ]);
    }
}
