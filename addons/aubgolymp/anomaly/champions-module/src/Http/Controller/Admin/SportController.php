<?php namespace Anomaly\ChampionsModule\Http\Controller\Admin;

use Anomaly\ChampionsModule\Sport\Form\SportFormBuilder;
use Anomaly\ChampionsModule\Sport\Table\SportTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class SportController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param SportTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(SportTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param SportFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(SportFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param SportFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(SportFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
