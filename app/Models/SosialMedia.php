<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SosialMedia extends Model
{
    protected $table = 'SosialMedia';
    protected $primaryKey = 'id_SosialMedia';

    protected $fillable = [
        'nama_platfrom',
        'link',
    ];
}
