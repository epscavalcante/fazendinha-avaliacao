<?php

namespace App\Docs\Requests;

/**
 * @OA\Schema(
 *      title="Store Article request",
 *      description="Store Article request body data",
 *      type="object",
 *      required={"title", "url", "summary", "url", "newsSite", "imageUrl"}
 * )
 */

class ArticleRequest
{
    /**
     * @OA\Property(
     *      title="Title",
     *      description="Title of the article",
     *      example="This is a title"
     * )
     *
     * @var string
     */
    public $title;

    /**
     * @OA\Property(
     *      title="Url",
     *      description="url of the article",
     *      example="http://example.com.br/posts/bla-bla-bla"
     * )
     *
     * @var string
     */
    public $url;

    /**
     * @OA\Property(
     *      title="Image url",
     *      description="url of banner article",
     *      example="http://example.com.br/storage/images/bla-bla-bla.jpg"
     * )
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @OA\Property(
     *      title="News site",
     *      description="Name of news site",
     *      example="NASA"
     * )
     *
     * @var string
     */
    public $newsSite;

    /**
     * @OA\Property(
     *      title="Summary",
     *      description="Summary of the new article",
     *      example="This is new article's summary"
     * )
     *
     * @var string
     */
    public $summary;

    /**
     * @OA\Property(
     *     title="published at",
     *     description="published at",
     *     example="2020-01-27 17:50:45",
     *     format="datetime",
     *     type="string"
     * )
     *
     * @var \DateTime
     */
    private $publishedAt;

    /**
     * @OA\Property(
     *     title="Lauches",
     *     description="Article lauches"
     * )
     *
     * @var \App\Docs\Models\Lauch[]
     */
    private $lauches;

    /**
     * @OA\Property(
     *     title="Events",
     *     description="Article events"
     * )
     *
     * @var \App\Docs\Models\Event[]
     */
    private $events;
}
