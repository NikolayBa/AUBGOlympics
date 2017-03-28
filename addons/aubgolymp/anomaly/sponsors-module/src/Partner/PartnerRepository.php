<?php namespace Anomaly\SponsorsModule\Partner;

use Anomaly\SponsorsModule\Partner\Contract\PartnerRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class PartnerRepository extends EntryRepository implements PartnerRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var PartnerModel
     */
    protected $model;

    /**
     * Create a new PartnerRepository instance.
     *
     * @param PartnerModel $model
     */
    public function __construct(PartnerModel $model)
    {
        $this->model = $model;
    }
}
