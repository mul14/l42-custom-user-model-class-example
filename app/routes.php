<?php

Route::get('/', function()
{
	return View::make('hello');
});

Route::post('/', function()
{
    $credentials = Input::only('email', 'password');

    if (Auth::attempt($credentials))
    {
        return 'Login successful';
    }

    return 'Login failed';
});
