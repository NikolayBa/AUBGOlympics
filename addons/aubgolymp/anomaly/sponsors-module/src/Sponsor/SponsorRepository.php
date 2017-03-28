<?php namespace Anomaly\SponsorsModule\Sponsor;

use Anomaly\SponsorsModule\Sponsor\Contract\SponsorRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class SponsorRepository extends EntryRepository implements SponsorRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var SponsorModel
     */
    protected $model;

    /**
     * Create a new SponsorRepository instance.
     *
     * @param SponsorModel $model
     */
    public function __construct(SponsorModel $model)
    {
        $this->model = $model;
    }
}
