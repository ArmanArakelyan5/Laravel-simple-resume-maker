<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Post extends Model
{  
    public $table = "post";
    use HasFactory;
    protected $fillable = [
        'name',
        'proffesion',
        'email',
        'country',
        'age',
        'experience',
        'education',
        'skills',
        'languages',
        'aboutMe',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
