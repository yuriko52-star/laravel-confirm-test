<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Laravel\Fortify\Fortify;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;


class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        
      
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        
        //  RateLimiter::for('login', function (Request $request) {
            //  $email = (string) $request->email;
            //   return Limit::perMinute(10)->by($email . $request->ip());

        //  });



        
 
   
        

           
            // $throttleKey = Str::transliterate(Str::lower($request->input(Fortify::username())).'|'.$request->ip());
           
            //  return Limit::perMinute(10)->by($throttleKey);
         
             Fortify::registerView(function () {
          return view('auth.register');
     });

      Fortify::loginView(function () {
        return view('auth.login');
      });

      RateLimiter::for('login', function (Request $request) {
         $email = (string) $request->email;

          return Limit::perMinute(10)->by($email . $request->ip());
     });
       
        
    
    //  Fortify::authenticateUsing(function (Request $request) {
        // app(LoginRequest::class)->validate($request->all());

        // $credentials = $request->only('email', 'password');
        
        // if (Auth::attempt($credentials)) {
            // return Auth::user();
        // }

        // return null;
    // });
    

     
       
        
    
     
}
}
    


            
      

   
        
    
   
    