<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
          'first_name' => ['required', 'string', 'max:255'],
          'last_name' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
          'password' => ['required', 'string', 'min:8', 'confirmed'],
          'avatar' => ['nullable', 'image'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $ruta = '';
        if (isset($data['avatar'])) {
            //muevo el archivo
            $ruta = $data['avatar']->store('public\avatars');
            $ruta = basename($ruta);

            //Comprimir la imagen para que no ocupe tanto espacio.
            $filepath = public_path('\\storage\\avatars\\'.$ruta);

            try {
                \Tinify\setKey("7rl2g2dfnNXgN51jJCgwGmXtRfqdhKwP");
                $source = \Tinify\fromFile($filepath);
                $source->toFile($filepath);
            } catch(\Tinify\AccountException $e) {
                // Verify your API key and account limit.
                return redirect('images/create')->with('error', $e->getMessage());
            } catch(\Tinify\ClientException $e) {
                // Check your source image and request options.
                return redirect('images/create')->with('error', $e->getMessage());
            } catch(\Tinify\ServerException $e) {
                // Temporary issue with the Tinify API.
                return redirect('images/create')->with('error', $e->getMessage());
            } catch(\Tinify\ConnectionException $e) {
                // A network connection error occurred.
                return redirect('images/create')->with('error', $e->getMessage());
            } catch(Exception $e) {
                // Something else went wrong, unrelated to the Tinify API.
                return redirect('images/create')->with('error', $e->getMessage());
            }
          }

        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'avatar' => $ruta,
        ]);
    }
}
