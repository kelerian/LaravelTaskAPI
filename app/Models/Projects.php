<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * атрибут, в котором указано поле
     * таблицы доступное для изменения
     */
    protected $fillable = [
        'name',
    ];
}
