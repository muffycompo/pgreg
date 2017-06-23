<?php

get('/',['as' => 'home', 'uses' => 'HomeController@index']);

get('/portal/dashboard',['as' => 'dashboard', 'middleware' => 'auth', 'uses' => 'HomeController@dashboard']);
get('/portal/login',['as' => 'login', 'uses' => 'HomeController@getLogin']);
get('/portal/signup',['as' => 'signup', 'uses' => 'HomeController@getSignup']);
get('/application/personal',['as' => 'personal', 'middleware' => 'auth', 'uses' => 'ApplicationController@getPersonal']);
get('/application/nok',['as' => 'nok', 'middleware' => 'auth', 'uses' => 'ApplicationController@getNok']);
get('/application/ssce',['as' => 'ssce', 'middleware' => 'auth', 'uses' => 'ApplicationController@getSsce']);
get('/application/qualifications',['as' => 'qualifications', 'middleware' => 'auth', 'uses' => 'ApplicationController@getQualifications']);
get('/application/programmes',['as' => 'programmes', 'middleware' => 'auth', 'uses' => 'ApplicationController@getProgrammes']);
get('/application/delete_exam/{id}',['as' => 'delete-exam', 'middleware' => 'auth', 'uses' => 'ApplicationController@getDeleteExam']);
get('/application/delete_qualification/{id}',['as' => 'delete-qualification', 'middleware' => 'auth', 'uses' => 'ApplicationController@getDeleteQualification']);

get('/application/print',['as' => 'print', 'middleware' => 'auth', 'uses' => 'HomeController@getPrintApplication']);
get('/application/change_password',['as' => 'change-password', 'middleware' => 'auth', 'uses' => 'ApplicationController@getChangePassword']);

get('/portal/password_reset',['as' => 'password-reset', 'uses' => 'HomeController@getPasswordReset']);
get('/portal/password_reset/{token}',['as' => 'password-reset-url', 'uses' => 'HomeController@getPasswordResetUrl']);

// Dropdown
get('/application/programme_type',['as' => 'get.programme-type', 'uses' => 'ApplicationController@getProgrammeTypes']);
get('/application/programme_faculty',['as' => 'get.programme-faculty', 'uses' => 'ApplicationController@getProgrammeFaculties']);
get('/application/programme_of_study',['as' => 'get.programme-of-study', 'uses' => 'ApplicationController@getProgrammeOfStudy']);

// Logout
get('/portal/logout',['as' => 'logout', 'uses' => 'HomeController@logout']);

// POST
post('/portal/signin',['as' => 'post-signin', 'uses' => 'HomeController@postLogin']);
post('/portal/signup',['as' => 'post-signup', 'uses' => 'HomeController@postSignup']);
post('/portal/upload_photo',['as' => 'post-upload-photo', 'middleware' => 'auth', 'uses' => 'ApplicationController@postPassportPhoto']);
post('/application/personal',['as' => 'post-personal', 'middleware' => 'auth', 'uses' => 'ApplicationController@postPersonal']);
post('/application/nok',['as' => 'post-nok', 'middleware' => 'auth', 'uses' => 'ApplicationController@postNok']);
post('/application/ssce',['as' => 'post-ssce', 'middleware' => 'auth', 'uses' => 'ApplicationController@postSsce']);
post('/application/olevel_exam',['as' => 'post-olevel-exam', 'middleware' => 'auth', 'uses' => 'ApplicationController@postOLevelExam']);
post('/application/qualifications',['as' => 'post-qualification', 'middleware' => 'auth', 'uses' => 'ApplicationController@postQualification']);
post('/application/programme',['as' => 'post-programme', 'middleware' => 'auth', 'uses' => 'ApplicationController@postProgramme']);
post('/application/change_password',['as' => 'post-change-password', 'middleware' => 'auth', 'uses' => 'ApplicationController@postChangePassword']);

post('/portal/password_reset',['as' => 'post-password-reset', 'uses' => 'HomeController@postPasswordReset']);
post('/portal/password_reset_url',['as' => 'post-password-reset-url', 'uses' => 'HomeController@postPasswordResetUrl']);
post('/portal/new_password',['as' => 'post-new-password-reset', 'uses' => 'HomeController@postNewPasswordReset']);
