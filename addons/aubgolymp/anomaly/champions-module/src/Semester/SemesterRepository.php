<?php namespace Anomaly\ChampionsModule\Semester;

use Anomaly\ChampionsModule\Semester\Contract\SemesterRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class SemesterRepository extends EntryRepository implements SemesterRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var SemesterModel
     */
    protected $model;

    /**
     * Create a new SemesterRepository instance.
     *
     * @param SemesterModel $model
     */
    public function __construct(SemesterModel $model)
    {
        $this->model = $model;
    }
}
