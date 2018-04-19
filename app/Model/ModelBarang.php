<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ModelBarang extends Model
{
    protected $table = 'barang'; // nama class ModelBarang harus sama dengan nama table
    public $timestamps = false; // created_at dan update_at tidak ada baru pake ini

}
