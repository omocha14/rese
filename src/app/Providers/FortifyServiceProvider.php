<?php

namespace App\Providers;

use Laravel\Fortify\Fortify;
use Illuminate\Support\ServiceProvider;
use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Http\Request;

class FortifyServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        //Fortify::createUsersUsing(CreateNewUser::class);
        //Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        //Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        //Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        Fortify::loginView(function () {
            return view('auth.login');
        });

        Fortify::registerView(function () {
            return view('auth.register');
        });

        //Fortify::requestPasswordResetLinkView(function () {
            //return view('auth.passwords.email');
        // });

        // Fortify::resetPasswordView(function ($request) {
        //     return view('auth.passwords.reset', ['request' => $request]);
        // });
        // RateLimiter::for('login', function (Request $request) {
        // $email = (string) $request->email;

    //     return Limit::perMinute(10)->by($email . $request->ip());
    // });
        //Fortify::registered(function (Request $request, $user) {
            //return redirect()->route('thanks');
        //});
    }
}
