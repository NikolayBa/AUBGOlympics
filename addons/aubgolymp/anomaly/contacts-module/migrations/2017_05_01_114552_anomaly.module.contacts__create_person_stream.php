<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleContactsCreatePersonStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'person'
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'position' => [
            'required' => true
        ],
        'slug'=> [
            'required' => true
        ],
        'name' => [
            'required' => true
        ],
        'phone' => [
            'required' => true
        ]
    ];

}
