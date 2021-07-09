<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\User1;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Storage;

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
            'mobile'=>'required',
            'img'=>'required',
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
        return User1::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'mobile'=>$data['mobile'],
            'img'=>$data['img'],
            //$data->img=$path,
            'password' => Hash::make($data['password']),
        ]);
    }
    
    public function signUp(Request $req){  
        if($req->isMethod('post')){      
            $data=$req->all();
           $usr= User1::where('email','=',$data['email'])->first();
           if(!$usr){
                $path = Storage::putFile('uploads', $req->file('img'));
                $data['img']=$path;
                $this->create($data);           
                return redirect('userlogin');
            }
            else{
               $req->session()->flash('message','use exsists witth this email');
                return view('usersignup');
            }
        }
        else{
            return view('usersignup');
        }

    }
}
