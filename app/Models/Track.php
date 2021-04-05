<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    public $table = 'tracks';
    public $fillable = ['name', 'avtor', 'img', 'mp3'];
}
