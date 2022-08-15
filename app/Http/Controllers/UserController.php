<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Ui\Presets\React;

class UserController extends Controller
{
    public function profile(Request $request){

        $profile = User::where('name',Auth::user()->name)->first();
        $data = [
            'profile' => $profile
        ];
        return view('profile_user',$data);
    }
    // public function resetpass(){
    //     return view('auth.passwords.reset');
    // }
    public function updateprofile(Request $request){
        $updateprofile = User::where('name',Auth::user()->name)->first();
        $updateprofile -> name = $request -> input('name');
        $updateprofile -> email = $request -> input('email');
        $updateprofile -> save();
        return redirect()->route('profile')->with('update_complete',"You update profile complete.");
    }
    public function repass(){

    }

    public function showuser(){
        $showuser = User::all();
        $data = [
            'showusers' => $showuser,
        ];
        return view('show_user_admin',$data);
    }

    public function edituserdata ($id){
        $edituser = User::find($id);
        $data = [
            'edituser' => $edituser,
        ];
        return view('edit_user_admin',$data);
    }

    public function edituserdata_action(Request $request){
        $id = $request -> input('id');
        $edituser = User::find($id);
        $edituser -> name = $request -> input('name');
        $edituser -> email = $request -> input('email');
        $edituser -> is_admin = $request -> input('status');
        $edituser -> save();
        return redirect('/showUserAdmin')->with('edit_complete',"แก้ไขข้อมูลสำเร็จ");
    }

    public function removeuserdata($id){
        User::destroy($id);
        return redirect('/showUserAdmin')->with('remove_complete',"ลบข้อมูลสำเร็จ");
    }

    public function adduserdata(){
        return view('add_user_admin');
    }
    public function adduserdata_action(Request $request ){
        $input = $request->all();
        $adduser = new User();
        $adduser -> name = $request -> input('name');
        $adduser -> email = $request -> input('email');
        $adduser -> password = bcrypt($request -> input('password'));
        $adduser -> is_admin = $request -> input('status');
        $adduser -> save();
        return redirect('/showUserAdmin')->with('Insert_complete',"เพิ่มข้อมูลสำเร็จ");
    }

}
