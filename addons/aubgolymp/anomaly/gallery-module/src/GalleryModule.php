<?php namespace Anomaly\GalleryModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class GalleryModule extends Module
{

    /**
     * The addon icon.
     *
     * @var string
     */
    protected $icon = 'fa fa-puzzle-piece';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'gallery' => [
            'buttons' => [
                'new_gallery',
            ]
        ],
        'semester' => [
            'buttons' => [
                'new_semester',
            ]
        ],
        'events' => [
            'buttons' => [
                'new_event',
            ]
        ]
    ];
}
