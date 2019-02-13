<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Repositories\GraphRepository;
use App\Model\Dto\Graph\GraphCreateCommand;
use Illuminate\Http\Request;

/**
 * Class CharactersController
 * @package App\Http\Controllers\Api
 */
class GraphsController extends AbstractBasicController
{
    /**
     * Before Initialize
     * Initialize Character Repository
     */
    public function beforeInit()
    {
        $this->repository = new GraphRepository();
        $this->createCommand = new GraphCreateCommand();
    }

    /**
     * Create Method
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse|object
     */
    public function create(Request $request)
    {
        $createCommand = $this->createCommand;
        $createCommand->fill($request->all());

        return $this->repository->commandCreate($createCommand);
    }


    /**
     * Filter by Id
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function filterById(Request $request)
    {
        // @todo validate this
        $wClause = ['id' => ['=', intval($request->id)]];
        return $this->get($wClause);
    }


    /**
     * Filter by Symbol
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function filterByInitials(Request $request)
    {
        // @todo validate this
        $wClause = ['initials' => ['like', '%'.(string) $request->symbol.'%']];
        return $this->get($wClause);
    }
}
