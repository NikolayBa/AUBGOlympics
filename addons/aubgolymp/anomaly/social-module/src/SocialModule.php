<?php namespace Anomaly\SocialModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class SocialModule extends Module
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
        'social' => [
            'buttons' => [
                'new_media'
            ]
        ]
    ];
}
