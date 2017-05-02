<?php namespace Anomaly\HeaderModule\MenuItem;

use Anomaly\HeaderModule\MenuItem\Contract\MenuItemRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class MenuItemRepository extends EntryRepository implements MenuItemRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var MenuItemModel
     */
    protected $model;

    /**
     * Create a new MenuItemRepository instance.
     *
     * @param MenuItemModel $model
     */
    public function __construct(MenuItemModel $model)
    {
        $this->model = $model;
    }
}
