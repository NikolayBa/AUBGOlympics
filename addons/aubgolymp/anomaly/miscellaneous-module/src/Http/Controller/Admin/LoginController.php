<?php namespace Anomaly\MiscellaneousModule\Http\Controller\Admin;

use Anomaly\MiscellaneousModule\Login\Form\LoginFormBuilder;
use Anomaly\MiscellaneousModule\Login\Table\LoginTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class LoginController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param LoginTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(LoginTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param LoginFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(LoginFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param LoginFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(LoginFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
