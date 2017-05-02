<?php namespace Anomaly\SliderModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class SliderModule extends Module
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
        'slider' => [
            'buttons' => [
                'new_slider'
            ]
        ]
    ];
}
