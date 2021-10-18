<?php

namespace App\Docs\Models;

/**
 * @OA\Schema(
 *     title="Event",
 *     description="Event model",
 *     @OA\Xml(
 *         name="Event"
 *     )
 * )
 */
class Event
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
     *      description="Provider of the event",
     *      example="This is a provider"
     * )
     *
     * @var string
     */
    public $provider;
}
