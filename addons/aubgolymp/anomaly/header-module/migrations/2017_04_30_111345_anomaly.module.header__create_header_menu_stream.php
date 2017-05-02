<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleHeaderCreateHeaderMenuStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'header_menu'
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'logo' => [
            'required' => true
        ]
    ];

}
