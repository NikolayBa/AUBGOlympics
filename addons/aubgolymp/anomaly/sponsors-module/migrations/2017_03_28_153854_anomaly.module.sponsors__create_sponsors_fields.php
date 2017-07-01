<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleSponsorsCreateSponsorsFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'title' => 'anomaly.field_type.text',
        'link' => 'anomaly.field_type.url',
        'logo' => 'anomaly.field_type.file'
    ];

}
