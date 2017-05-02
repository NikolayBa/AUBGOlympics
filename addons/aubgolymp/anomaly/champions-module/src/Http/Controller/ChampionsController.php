<?php
/**
 * Created by PhpStorm.
 * User: Inkyov
 * Date: 5/2/2017
 * Time: 6:22 AM
 */

namespace Anomaly\ChampionsModule\Http\Controller;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChampionsController
{
    public function show_results(Request $request){
        $winners = DB::table('champions_champion')->select('champions_champion.name')
            ->join('champions_semester', function ($join) use ($request) {
                $join->on('champions_champion.semester_id', '=', 'champions_semester.id')
                    ->where('champions_semester.name', $request->input()['semester']);
            })
            ->join('champions_event', function ($join) use ($request) {
                $join->on('champions_champion.event_id', '=', 'champions_event.id')
                    ->where('champions_event.name', $request->input()['events_select']);
            })
            ->join('champions_sport', function ($join) use ($request) {
                $join->on('champions_champion.sport_id', '=', 'champions_sport.id')
                    ->where('champions_sport.name', $request->input()['sports']);
            })
            ->get();
        return $winners;
    }
}

