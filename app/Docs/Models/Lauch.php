<?php

namespace App\Docs\Models;

/**
 * @OA\Schema(
 *     title="Lauch",
 *     description="Lauch model",
 *     @OA\Xml(
 *         name="Lauch"
 *     )
 * )
 */
class Lauch
{

    /**
     * @OA\Property(
     *     title="ID",
     *     description="ID",
     *     format="int64",
     *     example=1
     * )
     *
     * @var integer
     */
    private $id;

    /**
     * @OA\Property(
     *      title="Provider",
     *      description="Provider of the lauch",
     *      example="This is a provider"
     * )
     *
     * @var string
     */
    public $provider;
}
