<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The array of model-to-policy mappings.
     *
     * @var array
     */
    protected $policies = [
        // Add your policy mappings here
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Ensure Passport is properly set up
        Passport::loadKeysFrom(__DIR__.'/./secrets/oauth');

        // This should work if Passport is installed correctly
       // Passport::routes();
        Log::info('Passport Routes Registered');

        // Set token expiration times
        Passport::tokensExpireIn(Carbon::now()->addDays(15)); 
        Passport::refreshTokensExpireIn(Carbon::now()->addDays(30));
    }
}
