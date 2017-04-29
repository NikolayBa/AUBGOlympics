<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleSliderCreateHomeStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'home'
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [];

}
