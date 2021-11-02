<?php
namespace App\Repositories;
use Illuminate\Http\Request;
use App\Repositories\UserRepositoryInterface;
use App\User;
use Hash;
class UserRepository implements UserRepositoryInterface 
{
    

    public function alldata(){
        return User::all();
    }
   public function singledata($id){
    return  User::findOrFail($id);
   }
   public function insertdata(Request $request){
        
        $validate = $request->validate([
            'email'=>'required|unique:users',
            'name'=>'required',
            'password'=>'required',
            'password_confirmation'=>'required_with:password|same:password|min:3',
          ]);

         return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

   }
   public function updatadata(Request $request,$id){
     if( $request->password != '')
        {
          $validate = $request->validate([
            'email'=>'required',
            'name'=>'required',
            'password'=>'required',
            'password_confirmation'=>'required_with:password|same:password|min:3',
          ]);


       return  User::where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);  
        }
        else
        {
           $validate = $request->validate([
            'email'=>'required',
            'name'=>'required',
          ]);


        return  User::where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);  
         
        }

   }
   public function deletedata($id){
    return User::destroy($id);
   }
   
 
}