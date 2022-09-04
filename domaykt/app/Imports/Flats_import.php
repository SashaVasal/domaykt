<?php

namespace App\Imports;

use App\Models\Flat;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;

class Flats_import implements ToCollection
{

    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        $collections = collect();
        //Skip first row
        $flag = true;
        foreach ($rows as $row)
        {
            if($flag){
                $flag = false;
            }
            else
            {
                $flat = Flat::create([
                    'status_flat' => 0,
                    'price_for_square' => $row[7],
                    'house_id'=>1377,
                    'rooms'=>str_replace('-комн','',$row[2]),
                    'square' => $row[4],
                    'total_price' => $row[8],
                    'image'=>""
                ]);
                $collections->pop([$flat]);
            }
        }
        return $collections;
    }
}
