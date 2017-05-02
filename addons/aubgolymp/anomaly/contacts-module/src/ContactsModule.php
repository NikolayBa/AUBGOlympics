<?php namespace Anomaly\ContactsModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class ContactsModule extends Module
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
        'person' => [
            'buttons' => [
                'new_head'
            ]
        ]
    ];
}
