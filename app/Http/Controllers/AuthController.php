<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\validate;
use Hash;
use DB;
use App\User;
class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','signup']]);
    }

  
  public function login(Request $request)
    {
         $validate = $request->validate([
            'email'=>'required',
            'password'=>'required',
          ]);

        $credentials = $request->only('email', 'password');

        if ($token = $this->guard()->attempt($credentials)) {
            return $this->respondWithToken($token);
        }

        return response()->json(['error' => 'Email & Password Not Match'], 401);
    }


    public function signup(Request $request)
    {
        // dd($request);

          $validate = $request->validate([
            'email'=>'required|unique:users',
            'name'=>'required',
            'password'=>'required',
            'password_confirmation'=>'required_with:password|same:password|min:3',
          ]);


         User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

         return $this->login($request);

    }


    

   

  
    public function logout()
    {
        $this->guard()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }


      public function guard()
    {
        return Auth::guard();
    }

    
    public function refresh()
    {
        return $this->respondWithToken($this->guard()->refresh());
    }

  
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'name' => Auth()->user()->name,
            'userid' => Auth()->user()->id,
            'email' => Auth()->user()->email,
            'expires_in' => $this->guard()->factory()->getTTL() * 60
        ]);
    }

     public function me()
    {
        return response()->json($this->guard()->user());
    }

     public function user_data()
    {
        $email = Auth()->user()->email;
        $name = Auth()->user()->name;
        return response()->json(['email'=>$email,'name'=>$name]);
    }

     public function user_info()
    {
        $data = User::all();
        return response()->json($data);
    }
     public function user_delete($id)
    {
        $data = User::find($id)->delete();
        return response()->json('200');
    }

 
  
}