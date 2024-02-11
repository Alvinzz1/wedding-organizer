<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $table = "events";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'tanggal_events', 'nama_pasangan', 'lokasi', 'image'];
}
