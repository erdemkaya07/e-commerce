<?php

//Default
App::get('/default/index', false);
App::get('/default/detail',false);
App::get('/default/login',false);
App::get('/default/register',false);
App::get('/default/logout',false);

//Default Model
App::post('/default/login',false);
App::post('/default/registerSave',false);

//Product Model
App::get('/product/detail/([\d]+)', false);

//Basket Model
App::get('/basket/index', false);
App::get('/basket/step1', false);
App::get('/basket/product/([\d]+)', false);
App::get('/basket/step2', false);


?>