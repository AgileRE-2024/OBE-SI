<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

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
            'status' => $request->status,
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
        $user = User::find($nip);
        
        $request->validate([
            'nip' => 'required|string|unique:users,nip,' . $nip,
            'namaProdi' => 'required|string',
            'jabatanDosen' => 'required|string',
            'namaDosen' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $nip,
            'role' => 'required|in:0,1,2,3',
            'status' => 'required|string',
        ]);
        
        $user->update([
            'nip' => $request->nip,
            'namaProdi' => $request->namaProdi,
            'jabatanDosen' => $request->jabatanDosen,
            'namaDosen' => $request->namaDosen,
            'email' => $request->email,
            'role' => array_search($request->role, ['0','1','2','3']),
            'status' => $request->status,
        ]);
    
        return redirect()->route('listuser')->with('status', 'Pengguna berhasil diperbarui!');
    }

    public function destroy($nip)
    {
        User::destroy($nip);

    return redirect()->route('listuser')->with('status', 'Pengguna berhasil dihapus!');
    }
}

