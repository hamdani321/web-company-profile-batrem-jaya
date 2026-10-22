<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Table("produk")]
#[Fillable("id", 'nama', 'harga', 'stok', 'kode', 'deskripsi', 'foto', 'created_at', 'updated_at')]
class Produk extends Model
{
    //
}
