<?php namespace Anomaly\SocialModule\Http\Controller\Admin;

use Anomaly\SocialModule\Media\Form\MediaFormBuilder;
use Anomaly\SocialModule\Media\Table\MediaTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class MediasController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param MediaTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(MediaTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param MediaFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(MediaFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param MediaFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(MediaFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
