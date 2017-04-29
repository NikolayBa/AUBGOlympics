<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleChampionsCreateSportStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'sport',
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
