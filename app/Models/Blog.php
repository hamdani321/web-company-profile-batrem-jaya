<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Table('blog')]
#[Fillable(['id', 'users_id','judul', 'slug', 'kategori', 'ringkasan', 'deskripsi', 'foto', 'status', 'tanggal_publikasi', 'created_at', 'updated_at'])]
class Blog extends Model
{
    public function users() {
        return $this->belongsTo(User::class);
    }
}
