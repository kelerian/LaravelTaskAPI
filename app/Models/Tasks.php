<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * данный атрибут указывает,
     * какие поля в моделе Tasks можно изменять.
     */

    protected $fillable = [
        'title',
        'description',
        'status_id',
        'type_id',
    ];
}
