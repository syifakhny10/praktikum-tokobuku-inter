<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $guarded = ['id'];

    public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }
}