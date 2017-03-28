<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleGalleryCreateSemesterStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'semester',
        'translatable' => true,
        'title_column' => 'title'
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'title' => [
            'required' => true
        ]
    ];

}
