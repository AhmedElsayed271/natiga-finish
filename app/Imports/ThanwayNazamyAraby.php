<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use App\Models\ResultThwanwayNazamy;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\ResultThanwayNazamyAraby;
use Maatwebsite\Excel\Concerns\ToCollection;

class ThanwayNazamyAraby implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new ResultThanwayNazamyAraby([
            'code'     => $row[0],
            'city'    => $row[1],
            'name'    => $row[2],
            'name_of_mother'    => $row[3],
            'behavior'    => $row[4],
            'natig_safy'    => $row[5],
            'natig_camel'    => $row[6],
            'Result'    => $row[7],
 
         ]);
    }
}
