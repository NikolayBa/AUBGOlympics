<?php namespace Anomaly\HeaderModule\Http\Controller\Admin;

use Anomaly\HeaderModule\HeaderMenu\Form\HeaderMenuFormBuilder;
use Anomaly\HeaderModule\HeaderMenu\Table\HeaderMenuTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class HeaderMenuController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param HeaderMenuTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(HeaderMenuTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param HeaderMenuFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(HeaderMenuFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param HeaderMenuFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(HeaderMenuFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
