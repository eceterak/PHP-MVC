<?php

$router->get('/', 'PagesController@index');
$router->get('/contact', 'PagesController@contact');
$router->get('/help', 'HelpController@contact');