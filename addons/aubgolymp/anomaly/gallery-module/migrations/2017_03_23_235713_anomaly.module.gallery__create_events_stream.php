<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleGalleryCreateEventsStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'events',
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
            'required' => true
        ]
    ];

}
