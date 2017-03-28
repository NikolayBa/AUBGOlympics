<?php namespace Anomaly\GalleryModule\Gallery;

use Anomaly\GalleryModule\Gallery\Contract\GalleryRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class GalleryRepository extends EntryRepository implements GalleryRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var GalleryModel
     */
    protected $model;

    /**
     * Create a new GalleryRepository instance.
     *
     * @param GalleryModel $model
     */
    public function __construct(GalleryModel $model)
    {
        $this->model = $model;
    }
}
