<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleChampionsCreateEventStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'event',
        'translatable' => true,
        'title_column' => 'name'
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name' => [
            'required' => true
        ]
    ];

}
