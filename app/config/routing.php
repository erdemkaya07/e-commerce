<?php

//Default Modul

App::get('/', false);
App::get('/default/index', false);
App::get('/default/detail', false);
App::get('/default/login', false);
App::get('/default/register', false);
App::get('/default/logout', false);

App::post('/default/login', false);
App::post('/default/registersave', false);

//Product Modul
App::get('/product/detail/([\d]+)', false);
App::post('/product/feature', false);

//Basket Modul
App::get('/basket/index', false);
App::get('/basket/step1', false);
App::get('/basket/step2', false);
App::post('/basket/addproduct/([\d]+)', false);
App::get('/basket/preview/([\d]+)', false);

App::post('/basket/newaddress', false);
App::post('/basket/step3', false);
App::post('/basket/saveorder', false);

//panel Modul
//Genel
App::get('/panel/index', true);
App::get('/panel/login', false);
App::get('/panel/logout', false);

App::post('/panel/login', false);

//Color
App::get('/panel/color', true);
App::get('/panel/editcolor/([\d]+)', true);
App::get('/panel/deletecolor/([\d]+)', true);

App::post('/panel/addcolor', true);
App::post('/panel/updatecolor/([\d]+)', true);

//Size
App::get('/panel/size', true);
App::get('/panel/editsize/([\d]+)', true);
App::get('/panel/deletesize/([\d]+)', true);

App::post('/panel/addsize', true);
App::post('/panel/updatesize/([\d]+)', true);

//Category
App::get('/panel/category', true);
App::get('/panel/editcategory/([\d]+)', true);
App::get('/panel/deletecategory/([\d]+)', true);

App::post('/panel/addcategory', true);
App::post('/panel/updatecategory/([\d]+)', true);

//Product
App::get('/panel/product', true);
App::get('/panel/editproduct/([\d]+)', true);
App::get('/panel/deleteproduct/([\d]+)', true);

App::post('/panel/addproduct', true);
App::post('/panel/updateproduct/([\d]+)', true);
App::post('/panel/addfeatures/([\d]+)', true);
App::post('/panel/addproductimage/([\d]+)', true);

?>