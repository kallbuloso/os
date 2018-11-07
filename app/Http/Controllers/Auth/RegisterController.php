<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\VerifyUser;
use App\Mail\VerifyMail;
use App\Mail\WelcomeMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/home';

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
            'name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
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
        $user = User::create([
            'name'          => $data['name'],
            'email'         => $data['email'],
            'first_name'    => $data['first_name'],
            'last_name'     => $data['last_name'],
            'password'      => bcrypt($data['password']),
        ]);

        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => str_random(40)
        ]);

        Mail::to($data['email'])->send(new WelcomeMail($user));
        Mail::to($user->email)->send(new VerifyMail($user));

        return $user;        
    }

    public function verifyUser($token)
    {
        $verifyUser = VerifyUser::where('token', $token)->first();
        if(isset($verifyUser) ){
            $user = $verifyUser->user;
            if(!$user->verified) {
                $verifyUser->user->verified = 1;
                $verifyUser->user->save();
                $status = "Seu e-mail foi confirmado. Agora você pode fazer o login.";
            }else{
                $status = "Seu e-mail já foi verificado antes. Agora você só precisa fazer o login com seu e-mail e senha.";
            }
        }else{
            return redirect('/login')->with('warning', "Desculpe seu e-mail não foi identificado ou a confirmação expirou.");
        }
 
        return redirect('/login')->with('status', $status);
    }

    protected function registered(Request $request, $user)
    {
        $this->guard()->logout();
        return redirect('/login')->with('status', 'Por segurança e para validar seu endereço de e-mail, receberá uma mensagem no e-mail que cadastrou para confirmar seu cadastro. 
        Basta clicar no botão Confirmar cadastro.\n
        Caso não receba a mensagem em até 2 minutos, verifique sua caixa de lixo eletrônico ou anti spam ou faça o cadastro novamente.');
    }
}
