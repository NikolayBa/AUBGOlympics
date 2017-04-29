<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleSocialCreateMediasStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'medias'
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'image' => [
            'required' => true
        ],
        'link' => [
            'required' => true
        ]
    ];

}
