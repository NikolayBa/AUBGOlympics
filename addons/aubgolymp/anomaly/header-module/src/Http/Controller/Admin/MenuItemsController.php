<?php namespace Anomaly\HeaderModule\Http\Controller\Admin;

use Anomaly\HeaderModule\MenuItem\Form\MenuItemFormBuilder;
use Anomaly\HeaderModule\MenuItem\Table\MenuItemTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class MenuItemsController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param MenuItemTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(MenuItemTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param MenuItemFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(MenuItemFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param MenuItemFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(MenuItemFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
