<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleSliderCreateSliderFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'firstBackground' => 'anomaly.field_type.file',
        'secondBackground' => 'anomaly.field_type.file',
        'thirdBackground' => 'anomaly.field_type.file',
        'event' => 'anomaly.field_type.text',
        'eventSport' => 'anomaly.field_type.text',
        'date' => 'anomaly.field_type.text',
        'signLink' => 'anomaly.field_type.url',
        'signText' => 'anomaly.field_type.text',
        'secondSlideTextOne' => 'anomaly.field_type.text',
        'secondSlideTextTwo' => 'anomaly.field_type.text',
        'secondSlideTextThree' => 'anomaly.field_type.text',
        'secondSlideButton' => 'anomaly.field_type.text',
        'thirdSlideTextOne' => 'anomaly.field_type.text',
        'thirdSlideTextTwo' => 'anomaly.field_type.text',
        'thirdSlideButton' => 'anomaly.field_type.text',


    ];

}
