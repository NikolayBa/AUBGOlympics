<?php namespace Anomaly\CrewModule\Http\Controller\Admin;

use Anomaly\CrewModule\Person\Form\PersonFormBuilder;
use Anomaly\CrewModule\Person\Table\PersonTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class PeopleController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param PersonTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(PersonTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param PersonFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(PersonFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param PersonFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(PersonFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
