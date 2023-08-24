<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['tagName'];

    public function posts()
    {
        return $this->belongsToMany(Article::class);
    }
}
