<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategorihewan extends Model
{
    protected $table = 'kategorihewan';
    protected $primaryKey = 'id_kategorihewan';
    protected $fillable = [
        'namahewan',
    ];

}

