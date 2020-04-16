<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTipoRefeicaoAPIRequest;
use App\Http\Requests\API\UpdateTipoRefeicaoAPIRequest;
use App\Models\TipoRefeicao;
use App\Repositories\TipoRefeicaoRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class TipoRefeicaoController
 * @package App\Http\Controllers\API
 */

class TipoRefeicaoAPIController extends AppBaseController
{
    /** @var  TipoRefeicaoRepository */
    private $tipoRefeicaoRepository;

    public function __construct(TipoRefeicaoRepository $tipoRefeicaoRepo)
    {
        $this->tipoRefeicaoRepository = $tipoRefeicaoRepo;
    }

    /**
     * Display a listing of the TipoRefeicao.
     * GET|HEAD /tipoRefeicaos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $tipoRefeicaos = $this->tipoRefeicaoRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($tipoRefeicaos->toArray(), 'Tipo Refeicaos retrieved successfully');
    }

    /**
     * Store a newly created TipoRefeicao in storage.
     * POST /tipoRefeicaos
     *
     * @param CreateTipoRefeicaoAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoRefeicaoAPIRequest $request)
    {
        $input = $request->all();

        $tipoRefeicao = $this->tipoRefeicaoRepository->create($input);

        return $this->sendResponse($tipoRefeicao->toArray(), 'Tipo Refeicao saved successfully');
    }

    /**
     * Display the specified TipoRefeicao.
     * GET|HEAD /tipoRefeicaos/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var TipoRefeicao $tipoRefeicao */
        $tipoRefeicao = $this->tipoRefeicaoRepository->find($id);

        if (empty($tipoRefeicao)) {
            return $this->sendError('Tipo Refeicao not found');
        }

        return $this->sendResponse($tipoRefeicao->toArray(), 'Tipo Refeicao retrieved successfully');
    }

    /**
     * Update the specified TipoRefeicao in storage.
     * PUT/PATCH /tipoRefeicaos/{id}
     *
     * @param int $id
     * @param UpdateTipoRefeicaoAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoRefeicaoAPIRequest $request)
    {
        $input = $request->all();

        /** @var TipoRefeicao $tipoRefeicao */
        $tipoRefeicao = $this->tipoRefeicaoRepository->find($id);

        if (empty($tipoRefeicao)) {
            return $this->sendError('Tipo Refeicao not found');
        }

        $tipoRefeicao = $this->tipoRefeicaoRepository->update($input, $id);

        return $this->sendResponse($tipoRefeicao->toArray(), 'TipoRefeicao updated successfully');
    }

    /**
     * Remove the specified TipoRefeicao from storage.
     * DELETE /tipoRefeicaos/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var TipoRefeicao $tipoRefeicao */
        $tipoRefeicao = $this->tipoRefeicaoRepository->find($id);

        if (empty($tipoRefeicao)) {
            return $this->sendError('Tipo Refeicao not found');
        }

        $tipoRefeicao->delete();

        return $this->sendSuccess('Tipo Refeicao deleted successfully');
    }
}
