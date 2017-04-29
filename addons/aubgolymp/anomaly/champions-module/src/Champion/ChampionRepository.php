<?php namespace Anomaly\ChampionsModule\Champion;

use Anomaly\ChampionsModule\Champion\Contract\ChampionRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class ChampionRepository extends EntryRepository implements ChampionRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var ChampionModel
     */
    protected $model;

    /**
     * Create a new ChampionRepository instance.
     *
     * @param ChampionModel $model
     */
    public function __construct(ChampionModel $model)
    {
        $this->model = $model;
    }
}
