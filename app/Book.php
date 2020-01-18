<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // kolom yg boleh diisi
    protected $fillable = ['judul', 'penulis', 'stok', 'deskripsi'];

    // yg tidak boleh diisi
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
