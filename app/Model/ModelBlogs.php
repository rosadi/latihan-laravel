<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ModelBlogs extends Model
{
    protected $table = 'blogs'; // nama class ModelBarang harus sama dengan nama table
    public $timestamps = false; // created_at dan update_at tidak ada baru pake ini
}
