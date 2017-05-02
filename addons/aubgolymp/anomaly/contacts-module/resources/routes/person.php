<?php

return [
    'admin/contacts' => 'Anomaly\ContactsModule\Http\Controller\Admin\PersonController@index',
    'admin/contacts/create' => 'Anomaly\ContactsModule\Http\Controller\Admin\PersonController@create',
    'admin/contacts/edit/{id}' => 'Anomaly\ContactsModule\Http\Controller\Admin\PersonController@edit'
];
