<?php namespace Anomaly\CrewModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class CrewModule extends Module
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
        'crew' => [
            'buttons' => [
                'new_crew'
            ]
        ]
    ];
}
