<?php namespace Anomaly\ChampionsModule\Http\Controller\Admin;

use Anomaly\ChampionsModule\Champion\Form\ChampionFormBuilder;
use Anomaly\ChampionsModule\Champion\Table\ChampionTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChampionController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param ChampionTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(ChampionTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param ChampionFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(ChampionFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param ChampionFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(ChampionFormBuilder $form, $id)
    {
        return $form->render($id);
    }

    public function show_results(Request $request){
//        $winners = DB::table('aubgolymp_champions_champion')->where('');
        $winners = DB::table('champions_champion')->select('champions_champion.name')
            ->join('champions_sport', function ($join) use ($request) {
                $join->on('champions_champion.sport_id', '=', 'champions_sport.id')
                    ->where('champions_sport.name', '=', $request->input()['semester']);
            })
            ->get();
        return $winners;
    }
}
