<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //informando quais dados devem ser cadastrado
    protected $fillable = [
        'title', 'content', 'tags',
    ];

    //carrega automaticamente o relacionamento
    protected $with = ['user'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
