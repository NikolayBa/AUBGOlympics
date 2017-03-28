<?php namespace Anomaly\GalleryModule\Http\Controller\Admin;

use Anomaly\GalleryModule\Semester\Form\SemesterFormBuilder;
use Anomaly\GalleryModule\Semester\Table\SemesterTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class SemesterController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param SemesterTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(SemesterTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param SemesterFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(SemesterFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param SemesterFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(SemesterFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
