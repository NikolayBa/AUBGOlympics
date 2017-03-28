<?php namespace Anomaly\SponsorsModule\Coorganizer;

use Anomaly\SponsorsModule\Coorganizer\Contract\CoorganizerRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class CoorganizerRepository extends EntryRepository implements CoorganizerRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var CoorganizerModel
     */
    protected $model;

    /**
     * Create a new CoorganizerRepository instance.
     *
     * @param CoorganizerModel $model
     */
    public function __construct(CoorganizerModel $model)
    {
        $this->model = $model;
    }
}
