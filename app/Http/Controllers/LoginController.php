<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class LoginController extends Controller
{
    public function login()
    {
        return view("content.login.login", [
            "title" => "Login",
        ]);
    }
    public function proseslogin(Request $request)
    {
        $request->validate(
            [
                "nip" => "required",
                "password" => "required|string|min:8",
            ],
            [
                "nip.required" => "NIP wajib diisi.",
                "password.required" => "Kata sandi wajib diisi.",
                "password.string" => "Kata sandi harus berupa teks.",
                "password.min" => "Panjang kata sandi minimal 8 karakter.",
            ]
        );

        if (Auth::attempt($request->only("nip", "password"))) {
            if (Auth::user()->role == 0) {
                return redirect("/dashboard/dosen");
            } elseif (Auth::user()->role == 1) {
                return redirect("/dashboard/kurikulum");
            } elseif (Auth::user()->role == 2) {
                return redirect("/dashboard/admin");
            }
            return redirect("/dashboard/dosen_kurikulum");
        }

        return back()->with(
            "error",
            "NIP atau kata sandi salah! Silakan Login Ulang!"
        );
    }

    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect("/login");
    }

    public function myprofile()
    {
        $data = User::where("nip", Auth::user()->nip)->first();
        if (Auth::user()->role == 0) {
            return view("content.login.homedosen", compact("data"), [
                "title" => "My Profile",
            ]);
        } elseif (Auth::user()->role == 1) {
            return view("content.login.homekurikulum", compact("data"), [
                "title" => "My Profile",
            ]);
        } elseif (Auth::user()->role == 2) {
            return view("content.login.homeadmin", compact("data"), [
                "title" => "My Profile",
            ]);
        }
        return view("content.login.homedosen_kurikulum", compact("data"), [
            "title" => "My Profile",
        ]);
    }

    public function ubahpw(Request $request, $nip)
    {
        $data = User::find($nip);
        //dd($data);
        return view("content.login.changepw", compact("data"), [
            "title" => "Ubah Kata Sandi",
        ]);
    }

    public function updateprofile(Request $request, $nip)
    {
        // Validasi input
        $request->validate([
            "old_password" => "required",
            "new_password" => "required|min:8|confirmed",
        ]);

        // Cek kecocokan password lama
        if (!Hash::check($request->old_password, Auth::user()->password)) {
            return back()->with("error", "Kata sandi lama tidak sesuai");
        }

        // Update password baru
        $user = User::find(Auth::user()->nip);
        $user->update([
            "password" => Hash::make($request->new_password),
        ]);

        // Redirect sesuai peran pengguna
        $redirectPath = "/dashboard/";
        switch (Auth::user()->role) {
            case 3:
                $redirectPath .= "dosen_kurikulum";
                break;
            case 2:
                $redirectPath .= "admin";
                break;
            case 1:
                $redirectPath .= "kurikulum";
                break;
            default:
                $redirectPath .= "dosen";
        }

        return redirect($redirectPath)->with(
            "status",
            "Kata sandi berhasil diubah"
        );
    }
}
