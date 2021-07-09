<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\User;
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
            //'img'=>'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'user_type'=>'required',
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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'mobile'=>$data['mobile'],
            //'img'=>$data['img'],
            'user_type'=>$data['user_type'],
            'password' => Hash::make($data['password']),
        ]);
    }
    
    public function signUp(Request $req){  
        if($req->isMethod('post')){  
            
            $data=$req->all();
           $usr= User::where('email','=',$data['email'])->first();
           if($usr){ 

                $message = "Email already used, use a different one";
                echo "<script type='text/javascript'>alert('$message');</script>";
                return view('signup');                            
                //$path = Storage::putFile('uploads', $req->file());
                //$data['img']=$path;
                // echo "eirhviuerwerfvub";die();
                //$this->create($data);           
                //return redirect('userlogin');
               // echo "heyy Here!!!";
            }
           else{

                if($data['user_type']==''){
                    $message = "Please select a user type";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    return view('signup');
                }
               
               if($data['user_type']=='user'){
                    $this->create($data);
                    return view('signup');
               }
               if($data['user_type']=='vendor')
                {
                    $this->create($data);
                    return view('signup');
                }
                $req->session()->flash('message','user exsists with this email');
            }
        }
        if($req->isMethod('get')){
            return view('signup');
        }

    }
}
