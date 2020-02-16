<?php

use Illuminate\Http\Request;

// Demo 1
/*Route::get('contact', function() {
    return 'Hello from the vinhvo/contactform package';
});*/

// Demo 2
/*Route::get('contact', function() {
    return view('contactform::contact');
});

Route::post('contact', function(Request $request) {
    dump($request->all());
    return 'Process data Contact Form from the vinhvo/contactform package';
})->name('contact');*/

// Demo 3
Route::group(['namespace' => 'vinhvo\contactform\Http\Controllers', 'middleware' => ['web']], function(){
    Route::get('contact', 'ContactFormController@index');
    Route::post('contact', 'ContactFormController@sendMail')->name('contact');
});
