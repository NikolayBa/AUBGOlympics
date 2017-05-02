<?php namespace Anomaly\HeaderModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class HeaderModule extends Module
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
        'header' =>[
            'buttons' => [
                'new_header'
            ]
        ],
        'menu_items' => [
            'buttons' => [
                'new_menu'
            ]
        ]
    ];
}
