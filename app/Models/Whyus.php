<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whyus extends Model
{
    use HasFactory;
    protected $table = 'whyuss';

    protected $fillable = [
        'img', 'title', 'description', 'head', 'headdetail'
    ];
}
