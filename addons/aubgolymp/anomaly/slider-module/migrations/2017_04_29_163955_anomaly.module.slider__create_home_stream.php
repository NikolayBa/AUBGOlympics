<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleSliderCreateHomeStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'home'
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'firstBackground' => [
            'required' => true
        ],
        'secondBackground' => [
            'required' => true
        ],
        'thirdBackground' => [
            'required' => true
        ],
        'event' => [
            'required' => true
        ],
        'eventSport' => [
            'required' => true
        ],
        'date' => [
            'required' => true
        ],
        'signLink' => [
            'required' => true
        ],
        'signText' => [
            'required' => true
        ],
        'secondSlideTextOne' => [
            'required' => true
        ],
        'secondSlideTextTwo' => [
            'required' => true
        ],
        'secondSlideTextThree' => [
            'required' => true
        ],
        'secondSlideButton' => [
            'required' => true
        ],
        'thirdSlideTextOne' => [
            'required' => true
        ],
        'thirdSlideTextTwo' => [
            'required' => true
        ],
        'thirdSlideButton' => [
            'required' => true
        ],
    ];

}
