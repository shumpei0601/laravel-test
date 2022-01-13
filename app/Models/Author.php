<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable = ['content'];

    public function create()
    {
        Author::create([
            'content' => $item -> content
        ]);
    }
    public function update()
    {
        Author::where('content')->update([
            'content' => $item -> content
        ]);
    }
   
}
