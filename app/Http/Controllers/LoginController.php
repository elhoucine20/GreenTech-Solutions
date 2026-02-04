<?php

namespace App\Http\Controllers;

use App\Http\Services\Validate;
use Illuminate\Http\Request;
use App\Models\Utilisateur;

use Illuminate\Support\Facades\Auth;
use Mockery\Generator\StringManipulation\Pass\Pass;

class LoginController extends Controller
{
    //
    public function index(){
        return View('authentification/login');
        }
            public function toLogin(Request $request){
                if ($request) {
                    $pass1 = $request->confirmPassword;
                    $pass2 = $request->password;
                    if ($pass1 == $pass2) {
                     
                    // dd($request->post());
                    Validate::Valider($request);
                    
                    Utilisateur::create([
                        'name'=>$request->name,
                        'email'=>$request->email,
                        'password'=>$request->password,
                        'role'=>'client',
                        ]);
                    return view('authentification/login');
                    }else{
                        return view('authentification/inscrire');
                    }

                }
            }


            
            public function login(Request $request){
                $pass = $request->password;
                
                $email = $request->email;
                $credentials = ['email'=>$email,'password'=>$pass];
                Auth::attempt($credentials);
                // dd($request->post());
                if (Auth::attempt($credentials)){
                    if (Auth::user()->role=="admin") {
                        $request->session()->regenerate();
                         return to_route('index');                     
                         
                         }else{
                        $request->session()->regenerate();
                        // return to_route('404');
                        var_dump("maendkch lh9");
                        

                    }
                    
                    }else{
                            return back()->withErrors(['email'=>'email ou password incorrecgt'])->onlyInput('email');
                        }
                        
                        return view('authentification/login');
        }
        
        
        
        
            public function inscrire(){
            
            return View('authentification/inscrire');
            }

}
