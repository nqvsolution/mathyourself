<?php

use Jenssegers\Agent\Agent as Agent;
$Agent = new Agent();
  $viewPath = '';
  if ($Agent->isMobile()) {
      // you're a mobile device
      $viewPath = 'views/mobile';
  } else {
      // you're a desktop device, or something similar
      $viewPath = 'views/desktop';
  }

return [
  'paths' => [
        resource_path($viewPath),
    ],
  'compiled' => realpath(storage_path('framework/views')),
];







/*

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */

  /*  'paths' => [
        resource_path('views'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Compiled View Path
    |--------------------------------------------------------------------------
    |
    | This option determines where all the compiled Blade templates will be
    | stored for your application. Typically, this is within the storage
    | directory. However, as usual, you are free to change this value.
    |
    */

/*    'compiled' => realpath(storage_path('framework/views')),

];
*/
