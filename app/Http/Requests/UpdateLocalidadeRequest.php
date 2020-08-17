<?php

namespace App\Http\Requests;

use App\Localidade;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateLocalidadeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('localidade_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'descripcion' => [
                'string',
                'max:100',
                'required',
            ],
        ];
    }
}
