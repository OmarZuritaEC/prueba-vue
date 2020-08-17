<?php

namespace App\Http\Requests;

use App\Profesione;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateProfesioneRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('profesione_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'descripcion' => [
                'string',
                'max:100',
                'required',
                'unique:profesiones,descripcion,' . request()->route('profesione')->id,
            ],
        ];
    }
}
