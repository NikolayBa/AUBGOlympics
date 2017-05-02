<?php namespace Anomaly\ChampionsModule\Http\Controller\Admin;

use Anomaly\ChampionsModule\Champion\Form\ChampionFormBuilder;
use Anomaly\ChampionsModule\Champion\Table\ChampionTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

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

}
