<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleCrewCreateCrewFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'name' => 'anomaly.field_type.text',
        'position' => 'anomaly.field_type.text',
        'photo' => [
            'type' => 'anomaly.field_type.file',
            'config' => [
                'folders' => ['crew_photos']
            ]
        ],
        'over' => 'anomaly.field_type.text',
        'out' => 'anomaly.field_type.text'
    ];

}
