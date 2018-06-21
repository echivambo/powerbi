<?php


Route::prefix('api')->group(function () {
    Route::prefix('cabecalho')->group(function () {
        Route::get('', 'CabecalhoClontroller@index');
        Route::get('{id}', 'CabecalhoClontroller@show');
        Route::post('', 'CabecalhoClontroller@store');
        Route::put('{id}', 'CabecalhoClontroller@update');
        Route::delete('{id}', 'CabecalhoClontroller@destroy');
    });


    Route::prefix('dadosPessoais')->group(function () {
        Route::get('', 'DadosPessoaisController@index');
        Route::get('{id}', 'DadosPessoaisController@show');
        Route::post('', 'DadosPessoaisController@store');
        Route::put('{id}', 'DadosPessoaisController@update');
        Route::delete('{id}', 'DadosPessoaisController@destroy');
    });


    Route::prefix('exameClinico')->group(function () {
        Route::get('', 'ExameClinicoClontroller@index');
        Route::get('{id}', 'ExameClinicoClontroller@show');
        Route::post('', 'ExameClinicoClontroller@store');
        Route::put('{id}', 'ExameClinicoClontroller@update');
        Route::delete('{id}', 'ExameClinicoClontroller@destroy');
    });


    Route::prefix('planeamentoFamiliar')->group(function () {
        Route::get('', 'PlaneamentoFamiliarClontroller@index');
        Route::get('{id}', 'PlaneamentoFamiliarClontroller@show');
        Route::post('', 'PlaneamentoFamiliarClontroller@store');
        Route::put('{id}', 'PlaneamentoFamiliarClontroller@update');
        Route::delete('{id}', 'PlaneamentoFamiliarClontroller@destroy');
    });


    Route::prefix('rHIVSeguimento')->group(function () {
        Route::get('', 'RHIVSeguimentoClontroller@index');
        Route::get('{id}', 'RHIVSeguimentoClontroller@show');
        Route::post('', 'RHIVSeguimentoClontroller@store');
        Route::put('{id}', 'RHIVSeguimentoClontroller@update');
        Route::delete('{id}', 'RHIVSeguimentoClontroller@destroy');
    });


    Route::prefix('rTCancroColoUterino')->group(function () {
        Route::get('', 'RTCancroColoUterinoClontroller@index');
        Route::get('{id}', 'RTCancroColoUterinoClontroller@show');
        Route::post('', 'RTCancroColoUterinoClontroller@store');
        Route::put('{id}', 'RTCancroColoUterinoClontroller@update');
        Route::delete('{id}', 'RTCancroColoUterinoClontroller@destroy');
    });


    Route::prefix('rTSifles')->group(function () {
        Route::get('', 'RTSiflesClontroller@index');
        Route::get('{id}', 'RTSiflesClontroller@show');
        Route::post('', 'RTSiflesClontroller@store');
        Route::put('{id}', 'RTSiflesClontroller@update');
        Route::delete('{id}', 'RTSiflesClontroller@destroy');
    });


    Route::prefix('tranferidaPorPara')->group(function () {
        Route::get('', 'TranferidaPorParaClontroller@index');
        Route::get('{id}', 'TranferidaPorParaClontroller@show');
        Route::post('', 'TranferidaPorParaClontroller@store');
        Route::put('{id}', 'TranferidaPorParaClontroller@update');
        Route::delete('{id}', 'TranferidaPorParaClontroller@destroy');
    });

});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Route::resource('/users', 'UserController');
    Route::get('/changePassword','HomeController@showChangePasswordForm');
    Route::post('/changePassword','HomeController@changePassword')->name('changePassword');

});


