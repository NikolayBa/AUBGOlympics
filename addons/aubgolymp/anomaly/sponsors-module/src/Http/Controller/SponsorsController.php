<?php
/**
 * Created by PhpStorm.
 * User: Inkyov
 * Date: 3/29/2017
 * Time: 12:25 AM
 */

namespace Anomaly\SponsorsModule\Http\Controller;

use Anomaly\Streams\Platform\Http\Controller\PublicController;

class SponsorsController extends PublicController
{
    public function index(){
        return $this->view->make('anomaly.module.sponsors::index');
    }
}