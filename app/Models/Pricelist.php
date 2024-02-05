<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricelist extends Model
{
    protected $table = "pricelists";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama_pricelist', 'harga', 'detail_pricelist', 'image'];
}
