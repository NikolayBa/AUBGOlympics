<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

/**
 * Created by PhpStorm.
 * User: Inkyov
 * Date: 3/23/2017
 * Time: 3:47 PM
 */

class ChampionsController extends Controller{

    public function fillSemester(){
        echo "window.alert('hey')";
        $events = DB::table('semester')->pluck('name');
        return $events;
    }

}
