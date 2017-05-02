<?php namespace Anomaly\GalleryModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

class GalleryModuleServiceProvider extends AddonServiceProvider
{

    protected $routes = [
        'gallery' => 'Anomaly\GalleryModule\Http\Controller\GalleryController@index',
        'gallery/test' => 'Anomaly\GalleryModule\Http\Controller\GalleryController@home',
        'admin/gallery' => 'Anomaly\GalleryModule\Http\Controller\Admin\GalleriesController@index',
        'admin/gallery/create' => 'Anomaly\GalleryModule\Http\Controller\Admin\GalleriesController@create',
        'admin/gallery/edit/{id}' => 'Anomaly\GalleryModule\Http\Controller\Admin\GalleriesController@edit',
        'admin/gallery/semester' => 'Anomaly\GalleryModule\Http\Controller\Admin\SemesterController@index',
        'admin/gallery/semester/create' => 'Anomaly\GalleryModule\Http\Controller\Admin\SemesterController@create',
        'admin/gallery/semester/edit/{id}' => 'Anomaly\GalleryModule\Http\Controller\Admin\SemesterController@edit',
        'admin/gallery/events' => 'Anomaly\GalleryModule\Http\Controller\Admin\EventsController@index',
        'admin/gallery/events/create' => 'Anomaly\GalleryModule\Http\Controller\Admin\EventsController@create',
        'admin/gallery/events/edit/{id}' => 'Anomaly\GalleryModule\Http\Controller\Admin\EventsController@edit'
    ];


}
