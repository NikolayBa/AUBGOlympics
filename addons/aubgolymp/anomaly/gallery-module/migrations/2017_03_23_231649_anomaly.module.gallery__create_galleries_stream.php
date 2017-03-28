<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleGalleryCreateGalleriesStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'galleries',
        'translatable' => true,
        'title_column' => 'title'
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'thumbnail' => [
            'required' => true
        ],
        'title' => [
            'required' => true,
            'translatable' => true
        ],
        'slug' => [
            'unique' => true,
            'required' => true,
        ],
        'link' => [
            'required' => true,
            'unique' => true
        ],
        'semester' => [
            'required' => true,
            'translatable' => true
        ]
    ];

}
