<?php namespace Anomaly\MiscellaneousModule\Login;

use Anomaly\MiscellaneousModule\Login\Contract\LoginRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class LoginRepository extends EntryRepository implements LoginRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var LoginModel
     */
    protected $model;

    /**
     * Create a new LoginRepository instance.
     *
     * @param LoginModel $model
     */
    public function __construct(LoginModel $model)
    {
        $this->model = $model;
    }
}
