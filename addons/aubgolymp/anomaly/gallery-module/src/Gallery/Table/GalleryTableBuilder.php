<?php namespace Anomaly\GalleryModule\Gallery\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class GalleryTableBuilder extends TableBuilder
{

    /**
     * The table views.
     *
     * @var array|string
     */
    protected $views = [];

    /**
     * The table filters.
     *
     * @var array|string
     */
    protected $filters = [
        'title'
    ];

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
        'entry.thumbnail.preview(250,250)',
        'title',
        'semester'
    ];

    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'edit'
    ];

    /**
     * The table actions.
     *
     * @var array|string
     */
    protected $actions = [
        'delete'
    ];

    /**
     * The table options.
     *
     * @var array
     */
    protected $options = [];

    /**
     * The table assets.
     *
     * @var array
     */
    protected $assets = [];

}
