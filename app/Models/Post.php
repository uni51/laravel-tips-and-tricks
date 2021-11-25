<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    const CREATED_AT = 'created_date';
    const UPDATED_AT = 'updated_date';

    protected $guarded = [];

    public function getDateAttribute()
    {
        return $this->created_date->diffForHumans();
    }

    public function setAuthorAttribute($value)
    {
        $this->attributes['author'] = 'Prof. '.strtoupper($value);
    }
}
