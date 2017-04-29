<?php namespace Anomaly\ChampionsModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class ChampionsModule extends Module
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
        'champions' => [
            'buttons' => [
                'new_champion'
            ]
        ],
        'semester' => [
            'buttons' => [
                'new_semester'
            ]
        ],
        'event' => [
            'buttons' => [
                'new_event'
            ]
        ],
        'sport' => [
            'buttons' => [
                'new_sport'
            ]
        ]
    ];
}
