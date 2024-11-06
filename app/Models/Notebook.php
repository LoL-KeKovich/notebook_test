<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    use HasFactory;
    public $table = 'notebooks';
    protected $fillable = [
        'FIO',
        'company',
        'phone',
        'email',
        'birthday',
        'image'
    ];
    public $timestamps = false;
}
