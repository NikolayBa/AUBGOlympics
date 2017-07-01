<?php

use Anomaly\GalleryModule\Semester\SemesterModel;
use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleGalleryCreateGalleryFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'title' => 'anomaly.field_type.text',
        'slug' => [
            'type' => 'anomaly.field_type.slug',
            'config' => [
                'type' => '-',
                'slugify' => 'title',
            ]
        ],
        'semester' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'title_name' => 'title_column',
                'mode' => 'dropdown',
                'related' => SemesterModel::class
            ]
        ],
        'thumbnail' => 'anomaly.field_type.file',
        'link' => 'anomaly.field_type.text'

    ];

}
