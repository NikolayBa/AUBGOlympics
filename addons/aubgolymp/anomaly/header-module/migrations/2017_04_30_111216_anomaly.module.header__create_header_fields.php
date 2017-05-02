<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleHeaderCreateHeaderFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'logo' => 'anomaly.field_type.file',
        'name' => 'anomaly.field_type.text',
        'link' => 'anomaly.field_type.text'
    ];

}
