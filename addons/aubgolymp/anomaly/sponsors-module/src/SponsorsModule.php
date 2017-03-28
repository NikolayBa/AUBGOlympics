<?php namespace Anomaly\SponsorsModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class SponsorsModule extends Module
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
        'sponsors' => [
            'buttons' => [
                'new_sponsor'
            ]
        ],
        'partners' => [
            'buttons' => [
                'new_partner'
            ]
        ],
        'media' => [
            'buttons' => [
                'new_media'
            ]
        ],
        'coorganizer' => [
            'buttons' => [
                'new_coorganizer'
            ]
        ]
    ];
}
