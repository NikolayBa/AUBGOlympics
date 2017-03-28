<?php namespace Anomaly\SponsorsModule\Http\Controller\Admin;

use Anomaly\SponsorsModule\Link\Form\LinkFormBuilder;
use Anomaly\SponsorsModule\Link\Table\LinkTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class LinkController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param LinkTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(LinkTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param LinkFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(LinkFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param LinkFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(LinkFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
