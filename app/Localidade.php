<?php

namespace App;

use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Localidade extends Model
{
    use HasAdvancedFilter, SoftDeletes;

    public $table = 'localidades';

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
