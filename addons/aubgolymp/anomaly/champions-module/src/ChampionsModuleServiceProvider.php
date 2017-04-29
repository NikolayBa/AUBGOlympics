<?php namespace Anomaly\ChampionsModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

class ChampionsModuleServiceProvider extends AddonServiceProvider
{

    protected $routes = [
        'champions/show_results' => 'Anomaly\ChampionsModule\Http\Controller\Admin\ChampionController@show_results',
        'admin/champions' => 'Anomaly\ChampionsModule\Http\Controller\Admin\ChampionController@index',
        'admin/champions/create' => 'Anomaly\ChampionsModule\Http\Controller\Admin\ChampionController@create',
        'admin/champions/edit/{id}' => 'Anomaly\ChampionsModule\Http\Controller\Admin\ChampionController@edit',
        'admin/champions/event' => 'Anomaly\ChampionsModule\Http\Controller\Admin\EventController@index',
        'admin/champions/event/create' => 'Anomaly\ChampionsModule\Http\Controller\Admin\EventController@create',
        'admin/champions/event/edit/{id}' => 'Anomaly\ChampionsModule\Http\Controller\Admin\EventController@edit',
        'admin/champions/semester' => 'Anomaly\ChampionsModule\Http\Controller\Admin\SemesterController@index',
        'admin/champions/semester/create' => 'Anomaly\ChampionsModule\Http\Controller\Admin\SemesterController@create',
        'admin/champions/semester/edit/{id}' => 'Anomaly\ChampionsModule\Http\Controller\Admin\SemesterController@edit',
        'admin/champions/sport' => 'Anomaly\ChampionsModule\Http\Controller\Admin\SportController@index',
        'admin/champions/sport/create' => 'Anomaly\ChampionsModule\Http\Controller\Admin\SportController@create',
        'admin/champions/sport/edit/{id}' => 'Anomaly\ChampionsModule\Http\Controller\Admin\SportController@edit'
    ];

}
