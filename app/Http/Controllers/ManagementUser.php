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
        return view('content.manajemen_user.listuser', compact('users'));
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
            'password1' => 'required|min:6',
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
            'role' => array_search($request->role, ['dosen', 'kurikulum', 'admin']), // Ubah role menjadi angka sesuai dengan yang diinginkan
            'status' => $request->status,
        ]);
    
        return redirect()->route('users.index')->with('status', 'Pengguna berhasil ditambahkan!');
    }

    public function show($nip)
    {
        $user = User::find($nip);
        return view('admin.users.show', compact('user'));
    }

    public function edit($nip)
    {
        $user = User::find($nip);
        return view('content.manajemen_user.edituser', compact('user'));
    }

    public function update(Request $request, $nip)
    {
        $request->validate([
            'nip' => 'required|string|unique:users,nip,' . $nip,
            'namaProdi' => 'required|string',
            'jabatanDosen' => 'required|string',
            'namaDosen' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $nip,
            'role' => 'required|in:dosen,kurikulum,admin', // Sesuaikan dengan role yang diperbolehkan
            'status' => 'required|string',
        ]);
    
        // Ambil pengguna dari database
        $user = User::find($nip);
    
        // Update data dalam tabel
        $user->update([
            'nip' => $request->nip,
            'namaProdi' => $request->namaProdi,
            'jabatanDosen' => $request->jabatanDosen,
            'namaDosen' => $request->namaDosen,
            'email' => $request->email,
            'role' => array_search($request->role, ['dosen', 'kurikulum', 'admin']), // Ubah role menjadi angka sesuai dengan yang diinginkan
            'status' => $request->status,
        ]);
    
        return redirect()->route('users.index')->with('status', 'Pengguna berhasil diperbarui!');
    }

    public function destroy($nip)
    {
        User::destroy($nip);

    return redirect()->route('users.index')->with('status', 'Pengguna berhasil dihapus!');
    }
}

