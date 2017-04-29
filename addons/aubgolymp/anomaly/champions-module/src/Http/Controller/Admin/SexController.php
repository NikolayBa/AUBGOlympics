<?php namespace Anomaly\ChampionsModule\Http\Controller\Admin;

use Anomaly\ChampionsModule\Sex\Form\SexFormBuilder;
use Anomaly\ChampionsModule\Sex\Table\SexTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class SexController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param SexTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(SexTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param SexFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(SexFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param SexFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(SexFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
