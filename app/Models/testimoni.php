<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class testimoni extends Model
{
    protected $table = 'testimoni';
    protected $primaryKey = 'id_testimoni';

    protected $fillable = [
        'nama_customer',
        'riview',
        'rating',
        'image',
    ];
}
