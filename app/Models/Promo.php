<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $table = "promos";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama_promo', 'harga_awal', 'harga', 'bonus_promo', 'image'];
}
