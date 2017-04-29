<?php namespace Anomaly\SliderModule\Http\Controller\Admin;

use Anomaly\SliderModule\Home\Form\HomeFormBuilder;
use Anomaly\SliderModule\Home\Table\HomeTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class HomeController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param HomeTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(HomeTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param HomeFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(HomeFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param HomeFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(HomeFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
