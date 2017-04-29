<?php namespace Anomaly\CrewModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

class CrewModuleServiceProvider extends AddonServiceProvider
{

    protected $plugins = [];

    protected $commands = [];

    protected $routes = [
        'admin/crew' => 'Anomaly\CrewModule\Http\Controller\Admin\PeopleController@index',
        'admin/crew/create' => 'Anomaly\CrewModule\Http\Controller\Admin\PeopleController@create',
        'admin/crew/edit/{id}' => 'Anomaly\CrewModule\Http\Controller\Admin\PeopleController@edit'
    ];

    protected $middleware = [];

    protected $listeners = [];

    protected $aliases = [];

    protected $bindings = [];

    protected $providers = [];

    protected $singletons = [];

    protected $overrides = [];

    protected $mobile = [];

    public function register()
    {
    }

    public function map()
    {
    }

}
