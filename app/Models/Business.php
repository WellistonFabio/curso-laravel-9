<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    //informando quais dados devem ser cadastrado
    protected $fillable = [
        'name',
        'email',
        'address',
    ];
}
