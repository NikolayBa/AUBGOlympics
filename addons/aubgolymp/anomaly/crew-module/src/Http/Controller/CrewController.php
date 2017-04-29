<?php
/**
 * Created by PhpStorm.
 * User: Inkyov
 * Date: 3/30/2017
 * Time: 6:20 PM
 */

namespace Anomaly\CrewModule\Http\Controller;


use Anomaly\Streams\Platform\Http\Controller\PublicController;

class CrewController extends PublicController
{
    public function index(){
        return $this->view->make('anomaly.module.crew::gallery/index');
    }
}