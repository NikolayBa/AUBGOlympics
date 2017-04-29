<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleChampionsCreateChampionStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'champion',
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
        ],
        'semester' => [
            'required' => true
        ],
        'event' => [
            'required' => true
        ],
        'sport' => [
            'required' => true
        ],
        'sex' => [
            'required' => true
        ],
        'place' => [
            'required' => true
        ]
    ];

}
