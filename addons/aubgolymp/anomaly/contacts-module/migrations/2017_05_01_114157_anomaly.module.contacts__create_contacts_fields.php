<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleContactsCreateContactsFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'position' => 'anomaly.field_type.text',
        'slug' =>[
            'type' => 'anomaly.field_type.slug',
            'config' => [
                'type' => '-',
                'slugify' => 'position'
            ]
        ],
        'name' => 'anomaly.field_type.text',
        'phone' => 'anomaly.field_type.text'
    ];

}
