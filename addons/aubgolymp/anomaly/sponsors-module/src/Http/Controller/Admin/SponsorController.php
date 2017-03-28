<?php namespace Anomaly\SponsorsModule\Http\Controller\Admin;

use Anomaly\SponsorsModule\Sponsor\Form\SponsorFormBuilder;
use Anomaly\SponsorsModule\Sponsor\Table\SponsorTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class SponsorController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param SponsorTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(SponsorTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param SponsorFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(SponsorFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param SponsorFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(SponsorFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
