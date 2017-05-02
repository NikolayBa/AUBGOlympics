<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleMiscellaneousCreateLoginStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'login'
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [];

}
