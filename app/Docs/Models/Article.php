<?php

namespace App\Docs\Models;

/**
 * @OA\Schema(
 *     title="Article",
 *     description="Article model",
 *     @OA\Xml(
 *         name="Article"
 *     )
 * )
 */
class Article
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
     *      title="Featured",
     *      description="Define if article is featured",
     *      example="A nice article"
     * )
     *
     * @var string
     */
    public $featured;

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
