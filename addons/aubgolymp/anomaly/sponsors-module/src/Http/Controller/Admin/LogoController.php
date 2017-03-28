<?php namespace Anomaly\SponsorsModule\Http\Controller\Admin;

use Anomaly\SponsorsModule\Logo\Form\LogoFormBuilder;
use Anomaly\SponsorsModule\Logo\Table\LogoTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class LogoController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param LogoTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(LogoTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param LogoFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(LogoFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param LogoFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(LogoFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
