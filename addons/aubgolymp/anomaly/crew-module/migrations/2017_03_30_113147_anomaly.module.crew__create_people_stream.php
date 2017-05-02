<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleCrewCreatePeopleStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'people',
        'translatable' => true,
        'title_column' => 'name'
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'photo' => [
            'required' => true
        ],
        'name' => [
            'required' => true,
            'translatable' => true
        ],
        'position' => [
            'required' => true,
            'translatable' => true
        ],
        'over',
        'out'
    ];

}
