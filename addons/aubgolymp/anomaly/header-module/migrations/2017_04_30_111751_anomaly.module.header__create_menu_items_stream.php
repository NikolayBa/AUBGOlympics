<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleHeaderCreateMenuItemsStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'menu_items'
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
        'link' => [
            'required' => true
        ]
    ];

}
