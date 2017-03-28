<?php namespace Anomaly\GalleryModule\Http\Controller\Admin;

use Anomaly\GalleryModule\Gallery\Form\GalleryFormBuilder;
use Anomaly\GalleryModule\Gallery\Table\GalleryTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class GalleriesController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param GalleryTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(GalleryTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param GalleryFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(GalleryFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param GalleryFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(GalleryFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
