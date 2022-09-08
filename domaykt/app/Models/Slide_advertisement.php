<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Slide_advertisement extends Model
{
    use HasFactory;

    protected $fillable = [
        'house_id'
    ];

    public static function Add_data(Request $request){
        $data = new self();
        $data->house_id = $request['first_slide'];
        $data->save();

        $data = new self();
        $data->house_id = $request['second_slide'];
        $data->save();

        $data = new self();
        $data->house_id = $request['third_slide'];
        $data->save();
    }


}
