<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'theme_is',
        'user_id',
        'date',
        'text',
        'parrent_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}