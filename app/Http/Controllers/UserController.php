<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or password does not match";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
      function register(Request $req)
      {
            //return $req->input();
            $user = new User;
            $user->name = $req->name;
            $user->email = $req->email;
            $user->password = Hash::make($req->password);
            $con_pwd =$req->confirm_password;
           

            // Validate password strength
            $uppercase = preg_match('@[A-Z]@', $con_pwd);
            $lowercase = preg_match('@[a-z]@', $con_pwd);
            $number    = preg_match('@[0-9]@', $con_pwd);
            $specialChars = preg_match('@[^\w]@', $con_pwd);

            //checking if the confirm password matches with password
            if(!Hash::check($req->confirm_password,$user->password))
            {
                return "The passwords do not match";
            }
            else
            {   
                //checking if the password characters match the requirements
                if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($con_pwd) < 8) {
                    echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
                    
                }
                 else
                {
                    $user->save();
                    return redirect('/login');
                }
           }
       }
}