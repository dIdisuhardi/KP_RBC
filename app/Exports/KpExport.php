<?php

namespace App\Exports;

use App\Models\kp;
use Maatwebsite\Excel\Concerns\FromCollection;

class KpExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return kp::all();
    }
}
