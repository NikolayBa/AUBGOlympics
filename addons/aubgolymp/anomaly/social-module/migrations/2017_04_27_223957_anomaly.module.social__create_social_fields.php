<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleSocialCreateSocialFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'image' => 'anomaly.field_type.file',
        'link' => 'anomaly.field_type.url'
    ];

}
