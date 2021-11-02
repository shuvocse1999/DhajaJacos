<?php
namespace App\Repositories;

use Illuminate\Http\Request;
use Hash;
interface UserRepositoryInterface {
    
   public function alldata();
   public function singledata($id);
   public function insertdata(Request $request);
   public function updatadata(Request $request,$id);
   public function deletedata($id);
}