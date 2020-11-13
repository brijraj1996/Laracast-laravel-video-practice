<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable 
{
    public function projects()
    {
        return $this->hasMany(Project::class); //select * from projects where id = ''
    }

    public function articles()
    {
        return $this->hasMany(Article::class); //select * from articles where id = ''
    }
}
