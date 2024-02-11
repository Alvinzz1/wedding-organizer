<?php

namespace App\Imports;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Reservasi;

class ReservasiImport implements ToModel
{
    public function model(array $row)
    {
        return new Reservasi([
            'name' => $row['name'],
            'telp' => $row['telp'],
            'person' => $row['person'],
            'reservation_date' => $row['reservation_date'],
            'reservation_time' => $row['reservation_time'],
            'message' => $row['message'],
        ]);
    }
}
