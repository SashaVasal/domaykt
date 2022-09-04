<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stroy extends Model
{
    use HasFactory;

    public static function createFromRequest($data) : self
    {
        $stroy = new self();
        $stroy->name = $data['name'];
        $stroy->user_id = $data['user_id'];
        $stroy->phone = $data['phone'];
        $stroy->address = $data['address'];
        $stroy->latitude = $data['latitude'];
        $stroy->longitude = $data['longitude'];
        $stroy->places = '{}';
        $stroy->save();
        return $stroy;
    }

    public function add_place($id, $places){

    }

    protected $fillable = [
        'name',
        'user_id',
        'phone',
        'address',
        'places',
        'longitude',
        'latitude',
    ];
}
