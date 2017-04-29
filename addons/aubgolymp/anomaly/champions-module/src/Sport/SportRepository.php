<?php namespace Anomaly\ChampionsModule\Sport;

use Anomaly\ChampionsModule\Sport\Contract\SportRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class SportRepository extends EntryRepository implements SportRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var SportModel
     */
    protected $model;

    /**
     * Create a new SportRepository instance.
     *
     * @param SportModel $model
     */
    public function __construct(SportModel $model)
    {
        $this->model = $model;
    }
}
