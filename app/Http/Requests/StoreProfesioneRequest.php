<?php

namespace App\Http\Requests;

use App\Profesione;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreProfesioneRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('profesione_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'descripcion' => [
                'string',
                'max:100',
                'required',
                'unique:profesiones',
            ],
        ];
    }
}
