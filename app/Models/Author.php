<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SoftDeletes;

class Author extends Model
{
    use HasFactory;
    protected $fillable = ['content'];
   
}
