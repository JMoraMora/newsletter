<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Post extends Model
{
    use HasFactory;

    protected function excerpt(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attributes) => substr($attributes['content'], 0, 120),
        );
    }
}
