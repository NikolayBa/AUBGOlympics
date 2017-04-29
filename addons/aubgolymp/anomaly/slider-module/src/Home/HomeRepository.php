<?php namespace Anomaly\SliderModule\Home;

use Anomaly\SliderModule\Home\Contract\HomeRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class HomeRepository extends EntryRepository implements HomeRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var HomeModel
     */
    protected $model;

    /**
     * Create a new HomeRepository instance.
     *
     * @param HomeModel $model
     */
    public function __construct(HomeModel $model)
    {
        $this->model = $model;
    }
}
