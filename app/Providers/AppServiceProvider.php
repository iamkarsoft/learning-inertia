<?php

namespace App\Providers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

class AppServiceProvider extends ServiceProvider {
	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register() {
		// Synchronously
		Inertia::share('appName', config('app.name'));

		Inertia::share('errors', function () {
			return session()->get('errors') ? session()->get('errors')->getBag('default')->getMessages() : (object) [];
		});

		// Inertia::share('success', function () {
		// 	return session()->get('success') ? session()->get('success') : null;
		// });
		// Inertia::share('flash', function () {
		// 	return [
		// 		'success' => Session::get('success'),
		// 		'error' => Session::get('error'),
		// 	];
		// });

// Lazily
	}

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot() {
		//
	}
}
