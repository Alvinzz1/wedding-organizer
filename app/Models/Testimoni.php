<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $table = "testimonis";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'tanggal_events', 'nama_pasangan', 'lokasi', 'video'];
}
