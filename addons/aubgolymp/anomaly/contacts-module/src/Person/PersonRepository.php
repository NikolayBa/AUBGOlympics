<?php namespace Anomaly\ContactsModule\Person;

use Anomaly\ContactsModule\Person\Contract\PersonRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class PersonRepository extends EntryRepository implements PersonRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var PersonModel
     */
    protected $model;

    /**
     * Create a new PersonRepository instance.
     *
     * @param PersonModel $model
     */
    public function __construct(PersonModel $model)
    {
        $this->model = $model;
    }
}
