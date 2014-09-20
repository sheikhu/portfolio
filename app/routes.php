<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

if(Auth::check())
{
    require 'admin_routes.php';
}

// csrf protection for all post requests

Route::when('*', 'csrf', array('post'));

Route::get('/', ['as' => 'home', function()
{
    return View::make('index');
}]);

Route::get('/about', ['as' => 'about', function()
{
    return View::make('about');
}]);



Route::get('contact', ['as' => 'contact', function(){
    return View::make('contact');
}]);

Route::group(['before' => 'auth'], function(){

    Route::get('home', ['as' => 'homepage', function(){

        return View::make('auth.home');
    }]);



    Route::get('logout', ['as' => 'logout', function(){

        Auth::logout();

        return Redirect::route('homepage');
    }]);


});


Route::group(['before' => 'guest'], function(){


    Route::get('login', [ 'as' => 'login', 'uses' => 'SessionsController@getLogin']);


    Route::post('login', ['as' => 'post_login', function(){

        sleep(1);
        $credentials = Input::only(array('email', 'password'));

        try {
            Sentry::authenticate($credentials, false);
        }
        catch (Exception $e) {
            return Redirect::to('login')->withInput()->with('error','Bad credentials ! Please retry.');
        }


        if(Sentry::authenticate($credentials, false))
        {

            if(Request::ajax())
                return Response::json([
                    'status' => 'success',
                    'message' => 'You are successfully authenticated !',
                    'redirect' => route('homepage')]
                    );

            return Redirect::to('/home')->with('success', 'You are successfully authenticated !');
        }


        if(Request::ajax())
            return Response::json(['status' => 'failed', 'message' => 'Bad credentials !']);

        return Redirect::to('login')->withInput()->with('error','Bad credentials ! Please retry.');
    }]);

});


Route::get('blog', ['as' => 'blog', 'uses' => 'BlogController@index']);

Route::get('blog/{slug}', ['as' => 'post.show', 'uses' => 'BlogController@show']);




