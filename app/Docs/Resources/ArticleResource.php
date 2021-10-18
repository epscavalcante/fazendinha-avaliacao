<?php

namespace App\Docs\Resources;

/**
 * @OA\Schema(
 *     title="ArticleResource",
 *     description="Article resource",
 *     @OA\Xml(
 *         name="ArticleResource"
 *     )
 * )
 */
class ArticleResource
{
    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     *
     * @var \App\Docs\Models\Article[]
     */
    private $data;
}