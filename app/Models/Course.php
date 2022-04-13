<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Course extends Model
{
    use HasFactory;

    //crea la relacion de cursos a users
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //crea la relacion de cursos con posts
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    //crea un extracto virtual para el campo virtual
    public function getExcerptAttribute()
    {
        return substr($this->description,0,80) . "...";
    }

    //busca cursos similares de acuerdo con la categoria
    public function similar()
    {
        return $this->where('category_id', $this->category_id)
            ->with('user')
            ->take(2)
            ->get();
    }

}
