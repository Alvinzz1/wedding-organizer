<?php

namespace App\Exports;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Reservasi;

class ReservasiExport implements FromCollection
{
    public function collection()
    {
        return Reservasi::all();
    }
}
