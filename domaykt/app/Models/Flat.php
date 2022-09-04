<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
    use HasFactory;

   protected $fillable = [
       'status_flat',
       'price_for_square',
       'house_id',
       'rooms',
       'square',
       'total_price',
       'image',
   ];

   public static function flats_import($data,$house_id){
       $flag = true;
       foreach ($data[0] as $row)
       {
           if($flag){
               $flag = false;
           }
           else
           {
               $flat = Flat::create([
                   'status_flat' => 0,
                   'price_for_square' => $row[7],
                   'house_id'=>$house_id,
                   'rooms'=>str_replace('-комн','',$row[2]),
                   'square' => $row[4],
                   'total_price' => $row[8],
                   'image'=>""
               ]);
           }
       }
   }
}
