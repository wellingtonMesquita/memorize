<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    
    protected $fillable = ['native_words', 'foreign_words','user_id'];

    public function users()
    {
        return $this->hasOne(User::class);
    }
}
