<?php namespace Anomaly\SponsorsModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

class SponsorsModuleServiceProvider extends AddonServiceProvider
{

    protected $routes = [
        'sponsors' => 'Anomaly\SponsorsModule\Http\Controller\SponsorsController@index',
        'admin/sponsors' => 'Anomaly\SponsorsModule\Http\Controller\Admin\SponsorController@index',
        'admin/sponsors/create' => 'Anomaly\SponsorsModule\Http\Controller\Admin\SponsorController@create',
        'admin/sponsors/edit/{id}' => 'Anomaly\SponsorsModule\Http\Controller\Admin\SponsorController@edit',
        'admin/sponsors/coorganizer' => 'Anomaly\SponsorsModule\Http\Controller\Admin\CoorganizersController@index',
        'admin/sponsors/coorganizer/create' => 'Anomaly\SponsorsModule\Http\Controller\Admin\CoorganizersController@create',
        'admin/sponsors/coorganizer/edit/{id}' => 'Anomaly\SponsorsModule\Http\Controller\Admin\CoorganizersController@edit',
        'admin/sponsors/media' => 'Anomaly\SponsorsModule\Http\Controller\Admin\MediaController@index',
        'admin/sponsors/media/create' => 'Anomaly\SponsorsModule\Http\Controller\Admin\MediaController@create',
        'admin/sponsors/media/edit/{id}' => 'Anomaly\SponsorsModule\Http\Controller\Admin\MediaController@edit',
        'admin/sponsors/partners' => 'Anomaly\SponsorsModule\Http\Controller\Admin\PartnersController@index',
        'admin/sponsors/partners/create' => 'Anomaly\SponsorsModule\Http\Controller\Admin\PartnersController@create',
        'admin/sponsors/partners/edit/{id}' => 'Anomaly\SponsorsModule\Http\Controller\Admin\PartnersController@edit'
    ];

}
