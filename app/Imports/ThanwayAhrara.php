<?php

namespace App\Imports;

use App\Models\ReslutAdady;
use App\Models\ReslutThanwy;
use App\Models\ResultThwanayAhrar;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;

class ThanwayAhrara implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new ResultThwanayAhrar([
           'code'     => $row[0],
           'name'    => $row[1],
           'name_of_mother'    => $row[2],
           'Percent'    => $row[3],
           'Result'    => $row[4],
        ]);
    }
}
