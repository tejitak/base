<?php

\Route::group([], function () {
    \Route::get('/', 'User\IndexController@index');

    \Route::group(['middleware' => ['user.guest']], function () {
        \Route::get('signin', 'User\AuthController@getSignIn');
        \Route::post('signin', 'User\AuthController@postSignIn');

        \Route::get('forgot-password', 'User\PasswordController@getForgotPassword');
        \Route::post('forgot-password', 'User\PasswordController@postForgotPassword');

        \Route::get('reset-password/{token}', 'User\PasswordController@getResetPassword');
        \Route::post('reset-password', 'User\PasswordController@postResetPassword');

        \Route::get('signup', 'User\AuthController@getSignUp');
        \Route::post('signup', 'User\AuthController@postSignUp');
    });

    \Route::group(['middleware' => ['user.auth']], function () {

    });

});

