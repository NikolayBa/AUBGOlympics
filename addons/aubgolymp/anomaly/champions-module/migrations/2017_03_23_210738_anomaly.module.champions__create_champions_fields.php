<?php

use Anomaly\ChampionsModule\Event\EventModel;
use Anomaly\ChampionsModule\Semester\SemesterModel;
use Anomaly\ChampionsModule\Sport\SportModel;
use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleChampionsCreateChampionsFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'name' => 'anomaly.field_type.text',
        'event' => [
           'type' => 'anomaly.field_type.relationship',
            'config' => [
                'title_name' => 'name',
                'related' => EventModel::class
            ]
        ],
        'semester' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'title_name' => 'name',
                'related' => SemesterModel::class
            ]
        ],
        'sport' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'title_name' => 'name',
                'related' => SportModel::class
            ]
        ],
        'sex' => [
            'type' => 'anomaly.field_type.select',
            'config' => [
                'options' => ['Male', 'Female'],
            ]
        ],
        'place' => [
            'type' => 'anomaly.field_type.select',
            'config' => [
                'options' => ['First place', 'Second place', 'Third place']
            ]
        ],
    ];

}
