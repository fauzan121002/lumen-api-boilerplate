<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TodoServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->app->bind('todo',function(){
			return 'Welcome To My Todo API. Hopefully you get helped, documentation is on the root folder with the filename README.md';
		});
	}
}