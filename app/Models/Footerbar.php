<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footerbar extends Model
{
    use HasFactory;
    public $fillable = [
        'pic', 'name'
    ];
}