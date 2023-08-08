<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title','excerpt','body'];
    protected $guarded = ['id']; //kalau ini untuk decide mana yg ga boleh di isi 
    //salah satu aja antara fillable atau guarded
}
