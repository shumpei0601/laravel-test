<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['content'];

    public static $rules = array('content' => 'request');

    public function getDetail()
    {
        $txt = 'ID:'.$this->id . '';
    }
}
