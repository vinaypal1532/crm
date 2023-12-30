<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Destination;
use App\Models\Package;
//use App\Models\Blog;
use App\Models\Contact;

use Session;
class LoginController extends Controller
{

     public function __construct()
    {
       // $this->middleware('auth');
    }
    function loginpage(){

        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

           $email = $request->input('email'); 
           $passwords = $request->input('password'); 
           $password = Hash::make($passwords);
     
       
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->put('email', $email);

            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        } else {
            return redirect()->back()->with('error', 'Invalid username or password.');

        }
  
        //return redirect("login")->withSuccess('Login details are not valid');
    }

    public function dashboard(Request $request)
        {
            if(Auth::check()){
                   // $destinationCount = Destination::count();
                   // $packageCount = Package::count();
                  //  $blogCount = Blog::count();
                   // $contactCount = Contact::count();
               
                   $value = $request->session()->get('email');
                
                return view('home');
            }
    
            return redirect("login")->withSuccess('You are not allowed to access');
        }
        

        public function user_list(Request $request)
        {
            if(Auth::check()){
               
                $users = Contact::all();
 
                
                return view('user', ['users' => $users]);
               // return view('user');
            }
    
            return redirect("login")->withSuccess('You are not allowed to access');
        }
        public function logout(Request $request) {
            
            Auth::logout();

           
            $request->session()->flush();
            $request->session()->regenerate();

           // $request->session()->forget('email');       
    
            return Redirect('login');
        }
}
