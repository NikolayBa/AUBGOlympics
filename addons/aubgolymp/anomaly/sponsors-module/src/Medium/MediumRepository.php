<?php namespace Anomaly\SponsorsModule\Medium;

use Anomaly\SponsorsModule\Medium\Contract\MediumRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class MediumRepository extends EntryRepository implements MediumRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var MediumModel
     */
    protected $model;

    /**
     * Create a new MediumRepository instance.
     *
     * @param MediumModel $model
     */
    public function __construct(MediumModel $model)
    {
        $this->model = $model;
    }
}
