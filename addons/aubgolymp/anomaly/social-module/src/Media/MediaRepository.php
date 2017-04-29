<?php namespace Anomaly\SocialModule\Media;

use Anomaly\SocialModule\Media\Contract\MediaRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class MediaRepository extends EntryRepository implements MediaRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var MediaModel
     */
    protected $model;

    /**
     * Create a new MediaRepository instance.
     *
     * @param MediaModel $model
     */
    public function __construct(MediaModel $model)
    {
        $this->model = $model;
    }
}
