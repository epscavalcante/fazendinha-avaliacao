<?php

namespace App\Docs\Models;

/**
 * @OA\Schema(
 *     title="Launch",
 *     description="Launch model",
 *     @OA\Xml(
 *         name="Launch"
 *     )
 * )
 */
class Launch
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
     *      description="Provider of the launch",
     *      example="This is a provider"
     * )
     *
     * @var string
     */
    public $provider;
}
