<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLocalidadeRequest;
use App\Http\Requests\UpdateLocalidadeRequest;
use App\Http\Resources\Admin\LocalidadeResource;
use App\Localidade;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LocalidadesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('localidade_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new LocalidadeResource(Localidade::advancedFilter());
    }

    public function store(StoreLocalidadeRequest $request)
    {
        $localidade = Localidade::create($request->validated());

        return (new LocalidadeResource($localidade))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create(Localidade $localidade)
    {
        abort_if(Gate::denies('localidade_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [],
        ]);
    }

    public function show(Localidade $localidade)
    {
        abort_if(Gate::denies('localidade_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new LocalidadeResource($localidade);
    }

    public function update(UpdateLocalidadeRequest $request, Localidade $localidade)
    {
        $localidade->update($request->validated());

        return (new LocalidadeResource($localidade))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(Localidade $localidade)
    {
        abort_if(Gate::denies('localidade_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new LocalidadeResource($localidade),
            'meta' => [],
        ]);
    }

    public function destroy(Localidade $localidade)
    {
        abort_if(Gate::denies('localidade_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $localidade->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
