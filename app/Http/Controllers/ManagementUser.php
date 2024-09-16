<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ManagementUser extends Controller
{
    public function index()
    {
        $users = User::all();
        $title = "listuser";
        return view(
            "content.manajemen_user.listuser",
            compact("users", "title")
        );
    }

    public function create()
    {
        $title = "Create user";
        $prodi = Prodi::all();
        return view(
            "content.manajemen_user.createuser",
            compact("title", "prodi")
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            "nip" => "required|string|unique:users,nip",
            "jabatanDosen" => "required|string",
            "namaDosen" => "required|string",
            "email" => "required|email|unique:users,email",
            "password" => "required",
            "prodi" => "required|string",
            "role" => "required|in:0,1,2,3",
            "status" => "required|string",
        ]);

        // Simpan data ke dalam tabel
        $user = User::create([
            "nip" => $request->nip,
            "namaProdi" => $request->prodi,
            "jabatanDosen" => $request->jabatanDosen,
            "namaDosen" => $request->namaDosen,
            "email" => $request->email,
            "password" => bcrypt($request->password1),
            "role" => $request->role,
            "status" => $request->status,
        ]);

        return redirect()
            ->route("listuser")
            ->with("success", "Pengguna berhasil ditambahkan!");
    }

    public function show($nip)
    {
        $user = User::find($nip);
        return view("admin.users.show", compact("user"));
    }

    public function edit($nip)
    {
        $user = User::find($nip);
        $title = "Edit user";
        $prodi = Prodi::all();
        return view(
            "content.manajemen_user.edituser",
            compact("user", "title", "prodi")
        );
    }

    public function update(Request $request, $nip)
    {
        if ($request->nip == $nip) {
            $validator = Validator::make($request->all(), [
                "nip" => "required",
                "jabatanDosen" => "required|string",
                "namaDosen" => "required|string",
                "email" => "required|email",
                "role" => "required|in:0,1,2,3",
                "status" => "required|string",
                "prodi" => "required|string",
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                "nip" => "required|string|unique:users,nip," . $nip,
                "jabatanDosen" => "required|string",
                "namaDosen" => "required|string",
                "email" => "required|email|unique:users,email," . $nip,
                "role" => "required|in:0,1,2,3",
                "status" => "required|string",
                "prodi" => "required|string",
            ]);
        }
        if (
            User::where("nip", $request->nip)->exists() &&
            $request->nip != $nip
        ) {
            return redirect()->back()->with("error", "NIP sudah terpakai");
        }
        $user = User::find($nip);
        if (
            User::where("email", $request->email)->exists() &&
            $request->email != $user->email
        ) {
            return redirect()->back()->with("error", "Email sudah terpakai");
        }
        $user = User::where("nip", $nip)->first();
        $user->update([
            "nip" => $request->nip,
            "jabatanDosen" => $request->jabatanDosen,
            "namaDosen" => $request->namaDosen,
            "email" => $request->email,
            "role" => $request->role,
            "status" => $request->status,
            "namaProdi" => $request->prodi,
        ]);
        return redirect()
            ->route("listuser")
            ->with("success", "Pengguna berhasil diperbarui!");
    }

    public function destroy($nip)
    {
        User::destroy($nip);

        return redirect()
            ->route("listuser")
            ->with("warning", "Pengguna berhasil dihapus!");
    }
}
