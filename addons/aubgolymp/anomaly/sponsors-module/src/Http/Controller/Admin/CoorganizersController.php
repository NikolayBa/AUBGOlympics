<?php namespace Anomaly\SponsorsModule\Http\Controller\Admin;

use Anomaly\SponsorsModule\Coorganizer\Form\CoorganizerFormBuilder;
use Anomaly\SponsorsModule\Coorganizer\Table\CoorganizerTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class CoorganizersController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param CoorganizerTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(CoorganizerTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param CoorganizerFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(CoorganizerFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param CoorganizerFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(CoorganizerFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
