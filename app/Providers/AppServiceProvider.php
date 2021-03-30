<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Models\Info;

class AppServiceProvider extends ServiceProvider
{


  public function register()
  {
      //
  }

  public function boot()
  {
      $info = Info::where('id', 1)->first();
      Schema::defaultStringLength(191);
      view()->share('info', $info);
  }
}
