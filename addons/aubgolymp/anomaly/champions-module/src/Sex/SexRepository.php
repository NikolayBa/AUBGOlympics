<?php namespace Anomaly\ChampionsModule\Sex;

use Anomaly\ChampionsModule\Sex\Contract\SexRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class SexRepository extends EntryRepository implements SexRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var SexModel
     */
    protected $model;

    /**
     * Create a new SexRepository instance.
     *
     * @param SexModel $model
     */
    public function __construct(SexModel $model)
    {
        $this->model = $model;
    }
}
