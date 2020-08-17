<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProfesioneRequest;
use App\Http\Requests\UpdateProfesioneRequest;
use App\Http\Resources\Admin\ProfesioneResource;
use App\Profesione;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfesionesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('profesione_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ProfesioneResource(Profesione::advancedFilter());
    }

    public function store(StoreProfesioneRequest $request)
    {
        $profesione = Profesione::create($request->validated());

        return (new ProfesioneResource($profesione))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create(Profesione $profesione)
    {
        abort_if(Gate::denies('profesione_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [],
        ]);
    }

    public function show(Profesione $profesione)
    {
        abort_if(Gate::denies('profesione_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ProfesioneResource($profesione);
    }

    public function update(UpdateProfesioneRequest $request, Profesione $profesione)
    {
        $profesione->update($request->validated());

        return (new ProfesioneResource($profesione))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(Profesione $profesione)
    {
        abort_if(Gate::denies('profesione_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new ProfesioneResource($profesione),
            'meta' => [],
        ]);
    }

    public function destroy(Profesione $profesione)
    {
        abort_if(Gate::denies('profesione_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $profesione->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
