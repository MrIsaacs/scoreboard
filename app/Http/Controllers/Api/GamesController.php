<?php
/**
 * Created by PhpStorm.
 * User: Davor Ilic
 * Date: 25.03.2018
 * Time: 18:17
 */

namespace App\Http\Controllers\Api;


use Illuminate\Http\Request;
use App\Model\Dto\GameUpdateCommand;
use App\Http\Controllers\Repositories\GameRepository;

/**
 * Class GamesController
 * @package App\Http\Controllers\Api
 *
 * @Before("csrf", on={"post", "put", "delete"})
 */
class GamesController extends AbstractBasicController
{
    public function __construct()
    {
        $this->repository = new GameRepository();
    }

    /**
     * @return \Illuminate\Http\JsonResponse|object
     */
    public function read()
    {
        return $this->repository->read();
    }

    /**
     * @param Request $request
     *
     * @return object
     */
    public function create(Request $request)
    {
        return $this->repository->commandCreate($request);
    }


    /**
     * @param Request $request
     * @param int $id
     *
     * @return object
     */
    public function update(Request $request, $id)
    {
        $gameUpdateCommand = new GameUpdateCommand();
        $gameUpdateCommand->setId($id);
        $gameUpdateCommand->setRequest($request);
        /*
         * @todo: typeconverter entwickeln
        $convertIntoGame = [$id, $request];
        $typeconvert = new TypeConvert;
        $updateCommand = $typeconvert->convertTo(
            $convertIntoGame,   // id, request
            GameUpdateCommand::class  // speist id und request
        );
        // result $updateCommand : Game->id
        */

        return $this->repository->commandUpdate($gameUpdateCommand);
    }


    /**
     * Delete Action
     *
     * @param Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request, int $id)
    {
        return $this->repository->delete($request, $id);
    }
}