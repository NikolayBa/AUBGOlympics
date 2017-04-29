<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleChampionsCreateSemesterStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'semester',
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
