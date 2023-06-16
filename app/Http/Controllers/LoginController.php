<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function login(){
        return view ('content.login.login', [
            "title" => "Login"]);
    }
    public function proseslogin (Request $request){
       if(Auth::attempt($request->only('nip','password'))){
            if (auth()->user()->role==1){
                return redirect('/dashboard/kurikulum'); 
            }
            elseif (auth()->user()->role==2){
                return redirect('/dashboard/admin');
            }
            return redirect('/dashboard/dosen');
        }
        return view ('content.login.loginfailed', [
            "title" => "Login"]);
    }
    public function logout(Request $request){
        Auth::logout();
 
        request()->session()->invalidate();
     
        request()->session()->regenerateToken();
     
        return redirect('/login');

    }
    public function myprofile (){
        $data = User::where('nip',auth()->user()->nip)->first();
        if(auth()->user()->role==1){
            return view('content.login.homekurikulum',compact ('data'), [
                "title" => "My Profile"
            ]); 
        }
        elseif(auth()->user()->role==2){
            return view('content.login.homeadmin',compact ('data'), [
                "title" => "My Profile"
            ]); 
        }
        return view('content.login.homedosen',compact ('data'), [
            "title" => "My Profile"
        ]); 
    }
    public function ubahpw(Request $request, $nip){
        $data = User::find($nip);
        //dd($data);
        return view('content.login.changepw', compact ('data'), [
            "title" => "Ubah Kata Sandi"
        ]);
    }
    public function updateprofile(Request $request, $nip){
        //cek old password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with('error','kata sandi lama tidak sesuai');
        }

        //cek password baru sama confirmnya
        if($request->new_password != $request->new_password_confirmation){
            return back()->with('error','kata sandi baru dan konfirmasi kata sandi baru tidak sama');           
        }

        $user=User::find(auth()->user()->nip);
        if(auth()->user()->role==2){
            $user->update([
                'password'=> Hash::make($request->new_password)
            ]);
            return redirect('/dashboard/admin')->with('status','Kata sandi berhasil diubah');
        }
        elseif(auth()->user()->role==1){
            $user->update([
                'password'=> Hash::make($request->new_password)
            ]);
            return redirect('/dashboard/kurikulum')->with('status','Kata sandi berhasil diubah');
        }
        elseif(auth()->user()->role==0){
            $user->update([
                'password'=> Hash::make($request->new_password)
            ]);
            return redirect('/dashboard/dosen')->with('status','Kata sandi berhasil diubah');
        }
    }
}
