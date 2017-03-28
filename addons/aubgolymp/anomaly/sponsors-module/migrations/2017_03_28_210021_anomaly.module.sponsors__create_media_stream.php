<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleSponsorsCreateMediaStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'media',
        'translatable' => true,
        'title_column' => 'title'
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'title' => [
            'required' => true,
        ],
        'logo' => [
            'required' => true,
        ],
        'link' => [
            'required' => true,
        ]
    ];

}
