<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'course',
        'phone',
        'email',
        'birthday',
        'rg',
        'cpf',
        'address',
        'neighborhood',
        'state',
        'responsible',
        'accordingly',
    ];
}
