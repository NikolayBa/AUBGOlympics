<?php
/**
 * Created by PhpStorm.
 * User: Inkyov
 * Date: 3/24/2017
 * Time: 3:20 AM
 */

namespace Anomaly\GalleryModule\Http\Controller;


use Anomaly\Streams\Platform\Http\Controller\PublicController;

class GalleryController extends PublicController
{
    public function index(){
       return $this->view->make('anomaly.module.gallery::gallery/index');
    }
}