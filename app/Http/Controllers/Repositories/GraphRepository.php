<?php
/**
 * Created by PhpStorm.
 * User: webfacer
 * Date: 12.05.2018
 * Time: 01:42
 */

namespace App\Http\Controllers\Repositories;


use App\Model\Graph;
use Illuminate\Http\JsonResponse;
use Illuminate\Database\Eloquent\Model;
use App\Model\Dto\Graph\GraphCreateCommand;

/**
 * Class GraphRepository
 * @package App\Repositories
 */
class GraphRepository extends Repository
{
    /**
     * GraphRepository constructor.
     * Initialize the Graph
     */
    public function __construct()
    {
        parent::__construct(new Graph());
    }

    /**
     * @param GraphCreateCommand $characterCreateCommand
     *
     * @return JsonResponse
     */
    public function commandCreate(GraphCreateCommand $graphCreateCommand)
    {
        return parent::save(function(Graph $model) use ($graphCreateCommand) {
            return $model->fill($graphCreateCommand->getAttributes());
        });
    }
}

