<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    public $fillable = ['nome','copy','img','ordem'];
    use HasFactory;
}
