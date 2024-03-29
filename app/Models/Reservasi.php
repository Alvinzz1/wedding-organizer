<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    protected $table = "reservasis";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'name', 'telp', 'person', 'reservation_date', 'reservation_time', 'message'];
}
