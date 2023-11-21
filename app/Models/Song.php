<?php

namespace App\Models;
use App\Models\Song;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    protected $fillable=['title', 'artist'];
    
}
