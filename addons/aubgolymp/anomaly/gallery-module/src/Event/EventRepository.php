<?php namespace Anomaly\GalleryModule\Event;

use Anomaly\GalleryModule\Event\Contract\EventRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class EventRepository extends EntryRepository implements EventRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var EventModel
     */
    protected $model;

    /**
     * Create a new EventRepository instance.
     *
     * @param EventModel $model
     */
    public function __construct(EventModel $model)
    {
        $this->model = $model;
    }
}
