<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $fillable = [
        'status_object',
        'image',
        'address',
        'start_date',
        'end_date',
        'longitude',
        'latitude',
        'entrance',
        'is_floor',
    ];

    private function is_bool(string $param): bool
    {
        if($param == 'on'){
            return true;
        }
        return false;
    }

    public static function createFromRequest($data) : self
    {
        $house = new self();
        $house->status_object = $data['status_object'];
        $house->image = $data['image'] ?? " ";
        $house->address = $data['address'];
        $house->start_date = $data['start_date'];
        $house->end_date = $data['end_date'];
        $house->longitude = $data['longitude'];
        $house->latitude = $data['latitude'];
        $house->end_date = $data['end_date'];
        $house->entrance = $data['entrance'];
        $house->floors = $data['floors'];
        $house->is_floor = is_bool($data['is_floor'] ?? null);
        $house->save();
        return $house;
    }
}
