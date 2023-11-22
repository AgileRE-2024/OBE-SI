<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ManagementUser extends Controller
{
    public function index()
    {
        $users = User::all();
        $title = 'listuser';
        return view('content.manajemen_user.listuser', compact('users','title'));
    }

    public function create()
    {
        return view('content.manajemen_user.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|string|unique:users,nip',
            'jabatanDosen' => 'required|string',
            'namaDosen' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password1' => 'required',
            'confirm_password' => 'required|same:password1',
        ]);

        // Simpan data ke dalam tabel
        $user = User::create([
            'nip' => $request->nip,
            'namaProdi' => $request->namaProdi,
            'jabatanDosen' => $request->jabatanDosen,
            'namaDosen' => $request->namaDosen,
            'email' => $request->email,
            'password' => bcrypt($request->password1),
            'role' => 0,
            'status' => 'Aktif Bekerja',
        ]);

        return redirect()->route('login')->with('status', 'Pengguna berhasil ditambahkan!');
    }

    public function show($nip)
    {
        $user = User::find($nip);
        return view('admin.users.show', compact('user'));
    }

    public function edit($nip)
    {
        $user = User::find($nip);
        $title = 'edituser';
        return view('content.manajemen_user.edituser', compact('user','title'));
    }

    public function update(Request $request, $nip)
    {
        if ($request->nip == $nip) {
        $validator = Validator::make($request->all(), [
            'nip' => 'required',
            'jabatanDosen' => 'required|string',
            'namaDosen' => 'required|string',
            'email' => 'required|email',
            'role' => 'required|in:0,1,2,3',
            'status' => 'required|string',
        ]);
    } else {
        $validator = Validator::make($request->all(), [
            'nip' => 'required|string|unique:users,nip,' . $nip,
            'jabatanDosen' => 'required|string',
            'namaDosen' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $nip,
            'role' => 'required|in:0,1,2,3',
            'status' => 'required|string',
        ]);
    }

    $user = User::where('nip', $nip)->first();
    $user->update([
        'nip' => $request->nip,
        'jabatanDosen' => $request->jabatanDosen,
        'namaDosen' => $request->namaDosen,
        'email' => $request->email,
        'role' => $request->role,
        'status' => $request->status,
    ]);
    return redirect()->route('listuser')->with('success', 'Pengguna berhasil diperbarui!');
    }

    public function destroy($nip)
    {
        User::destroy($nip);

    return redirect()->route('listuser')->with('warning', 'Pengguna berhasil dihapus!');
    }
}

