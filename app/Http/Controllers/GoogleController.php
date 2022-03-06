<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
  
class GoogleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
        
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {
            info("come");
            $googleUser = Socialite::driver('google')->stateless()->user();
            info("come");


            $user = User::where('google_id', $googleUser->id)->first();

            if ($user) {

                Auth::login($user);

                return redirect()->intended('dashboard');

            } else {
                $user = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'google_id' => $googleUser->id,
                ]);

                Auth::login($user);

                return redirect()->intended('dashboard');
            }
      
        } catch (Exception $e) {
            info("herer");
            dd($e->getMessage());
        }
    }
}