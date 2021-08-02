<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'title',
        'description',
        'author_id'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'author_id');
    }
}
