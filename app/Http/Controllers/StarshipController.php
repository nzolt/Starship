<?php

namespace App\Http\Controllers;

use App\Model\Starship;
use App\Resource\StarshipResource;
use Illuminate\Http\Request;

class StarshipController extends Controller
{
    protected $shipId = 0;

    /**
     * @param Request $request
     * @param int|null $id
     * @return array|\Illuminate\Http\Response|\Laravel\Lumen\Http\ResponseFactory
     *
     */

    /**
     * @OA\Get(
     *     path="/api/starship",
     *     summary="Get Starship by ID",
     *     tags={"starship"},
     *     summary="Finds Starship",
     *     description="Get Starship details",
     *     operationId="getStarshipById",
     *     deprecated=false,
     *     @OA\Parameter(
     *          type="string",
     *          name="X-API-KEY",
     *          in="header",
     *          required=true
     *     ),
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="id",
     *                     type="integer"
     *                 ),
     *                 example={"id": 10}
     *             )
     *         )
     *     ),
     *      @SWG\Response(
     *          response=200,
     *          description="...",
     *          examples={
     *              "application/json": {
     *                   "id": 1,
     *                   "name": "Devastator",
     *                   "class": "Star Destroyer",
     *                   "crew": 35000,
     *                   "image": "https:\\url.to.image",
     *                   "value": 1999.99,
     *                   "status": "operational",
     *                   "armament": [
     *                       {
     *                           "title": "Turbo Laser",
     *                           "qty": "60"
     *                       },
     *                       {
     *                           "title": "Ion Cannons",
     *                           "qty": "60",
     *                       },
     *                       {
     *                           "title": "Tractor Beam",
     *                           "qty": "10",
     *                       },
     *                   ]
     *               }
     *          }
     *      )
     *  )
     * TODO: Fix Swagger definition
     */
    public function get(Request $request, int $id = null)
    {
        $ship = Starship::first();
        $data = json_decode($request->getContent());
        if(!$data){
            return response(['Unprocessable Entity'], 422);
        }

        return StarshipResource::getStarship($data->id);
    }

    /**
     * @param Request $request
     *
     * TODO: Add Swagger annotation
     */
    public function post(Request $request)
    {

    }
}
