<?php

namespace App;

use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profesione extends Model
{
    use HasAdvancedFilter, SoftDeletes;

    public $table = 'profesiones';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'descripcion',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
