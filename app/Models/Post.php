<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //cher angel codes

    protected $guarded = [];

    protected $fillable = ['user_id', 'title','genre','writer','singer'];


    protected $casts = [
        'created_at' => 'datetime',
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');

    }
    public function isEditable()
    {
     return auth()->user()->role == 'editor' || auth()->user()->id == $this->user_id;
    }
}
