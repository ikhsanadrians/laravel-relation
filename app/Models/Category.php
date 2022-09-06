<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [

        'user_id',
        'moderator_id',
        'start_date',
        'end_date'

    ];

    public function questions(){
        return $this->hasMany(Question::class);
    }

}