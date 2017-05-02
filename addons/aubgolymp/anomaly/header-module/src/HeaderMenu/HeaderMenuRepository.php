<?php namespace Anomaly\HeaderModule\HeaderMenu;

use Anomaly\HeaderModule\HeaderMenu\Contract\HeaderMenuRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class HeaderMenuRepository extends EntryRepository implements HeaderMenuRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var HeaderMenuModel
     */
    protected $model;

    /**
     * Create a new HeaderMenuRepository instance.
     *
     * @param HeaderMenuModel $model
     */
    public function __construct(HeaderMenuModel $model)
    {
        $this->model = $model;
    }
}
