<?php namespace Anomaly\SponsorsModule\Http\Controller\Admin;

use Anomaly\SponsorsModule\Medium\Form\MediumFormBuilder;
use Anomaly\SponsorsModule\Medium\Table\MediumTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class MediaController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param MediumTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(MediumTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param MediumFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(MediumFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param MediumFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(MediumFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
