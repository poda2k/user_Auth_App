<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\userTableModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;



class userAuthController extends Controller
{
    
    public function signup(Request $req){

        return view('signUp' ,[
            'pageTitle' => 'Sign Up',
            'message' => ''
        ]);
        // try{
        //     DB::connection()->getPdo();
        //     echo "connection successful";
        // }catch(\Exception $error){
        //     die("couldn`t connect to database" . $error->getMessage());
        // }
    }

    public function postSignUp(Request $req){
        
        $user = $req->validate([
            'name' => 'required|string|max:255|min:5',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|max:255|min:5'
        ]);

        $checkForUser = userTableModel::where('email', $user['email'])->first();
        if($checkForUser){
            return view('signUp',[
                'message' => 'email already exists',
                'pageTitle'=> 'Sign Up',
            ]);
        }else{
            $encryptedPassword = Hash::make($user['password']);

            $makeUser = UserTableModel::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $encryptedPassword,
                'role' => 'user'
            ]);
            Session::put(['userName' => $makeUser->name ,'userId'=>$makeUser->id ,'role'=>$makeUser->role]);

            return redirect()->route('home',[
                'message'=> 'signedUp successful'
            ]);
        }
    }

    public function getLogin(Request $req) {
        return view('login',[
            'pageTitle' => 'login',
            'message'=>''
        ]);
    }
    
    public function postlogin(Request $req){

        $userData = $req->validate([
            'email'=>'required|string' ,
            'password'=>'required|min:5|max:255'
        ]);
        if($userData){
            $checkForUser = userTableModel::where('email', $userData['email'])->first();
            if($checkForUser){
                $hashedPass = $checkForUser->password ;
                if(Hash::check($userData['password'] ,$hashedPass )){
                    Session::put(['userName'=>$checkForUser->name, 'userId'=>$checkForUser->id, 'role'=>$checkForUser->role]);
                    return view('home',[
                        'pageTitle'=>'home'
                    ]);
                }else{
                    return view('login',[
                        'pageTitle' => 'Login',
                        'message' =>'wrong password'
                    ]);
                }
            }else{
                return view('login',[
                    'pageTitle' =>'login',
                    'message' =>'login failed'
                ]);
            }
        }
    }

    public function logOut(Request $req) {

        // Auth::logout();
        $req->session()->flush();
        // Session::pull('userName','userId');

        return redirect()->route('home');

    }
}
