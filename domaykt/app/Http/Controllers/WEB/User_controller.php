<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\Flat;
use App\Models\House;
use App\Models\Slide_advertisement;
use Illuminate\Http\Request;


class User_controller extends Controller
{
    //
    public function welcome_page(){

        #Передача массив слайда
        $slide_cards = array();
        $slide_advertisements = Slide_advertisement::all();

        foreach ($slide_advertisements as $slide_advertisement){
            array_push($slide_cards, House::query()->find($slide_advertisement->house_id));
        }

        return view('welcome',['houses' =>House::query()->where('id','>',0)->paginate(15), 'slide_cards'=>$slide_cards]);
    }

    public function see_house($id){
        $flats = Flat::query()->where('house_id',$id)->get();
        return view('User.see_house',[
            'flats'=>$flats
        ]);
    }
}
