<?php

Route::group([
    //  'prefix'     => 'stripe',
       'middleware' => ['web', 'theme', 'locale', 'currency']
   ], function () {

       Route::get('stripe-redirect','DevbigkellyBagisto\Stripe\Http\Controllers\StripeController@redirect')->name('stripe.process');
       Route::get('stripe-success','DevbigkellyBagisto\Stripe\Http\Controllers\StripeController@success')->name('stripe.success'); 
       Route::get('stripe-cancel','DevbigkellyBagisto\Stripe\Http\Controllers\StripeController@failure')->name('stripe.cancel'); 
});