<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\kategori;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return view('backend.dashboard', compact('user'));
    }
    /**
     * Display a listing of the resource.
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(about $about)
    {
        //
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.logout')->with('success', 'Logout Berhasil');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(about $about)
    {
        $id = Auth::user()->id; // Gunakan default 'id' jika primary key di model User adalah 'id'
        $pengguna = User::find($id);

        if (!$pengguna) {
            return redirect()->route('home')->with('error', 'Pengguna tidak ditemukan.');
        }

        return view('backend.edit_profile', compact('pengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, about $about)
    {
        $id = Auth::user()->id_user;

        $pengguna = User::findOrFail($id);

        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $id . ',id_user',
            'email' => 'required|email|unique:users,email,' . $id . ',id_user',
            'password' => 'nullable|min:8',
            'bio' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

          ]);

        // Handling Foto Profil
        $foto = $pengguna->foto;
        if ($request->hasFile('foto')) {
            if ($foto) {
                Storage::disk('public')->delete($foto);
            }
            $uniqueFile = uniqid() . '_' . $request->file('foto')->getClientOriginalName();
            $request->file('foto')->storeAs('foto_pengguna', $uniqueFile, 'public');
            $foto = 'foto_pengguna/' . $uniqueFile;
        }

        // Update data pengguna
        $pengguna->update([
            'nama' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->filled('password') ? Hash::make($request->password) : $pengguna->password,
            'foto' => $foto,
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(about $about)
    {
        //
    }
}
