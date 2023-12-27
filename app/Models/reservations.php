<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservations extends Model
{
    use HasFactory;
    protected $table = 'reservations';
    protected $fillable = [
        'TGL_RESERVE',
        'STATUS',
        'NOTIFICATION_DATE',
        'NOTIFICATION_MESSAGES'
    ];

}
