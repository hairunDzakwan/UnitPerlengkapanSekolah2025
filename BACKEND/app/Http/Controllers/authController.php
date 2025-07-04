<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(Request $request)
{
    // Validasi input
    $request->validate([
        'name' => 'required|string|max:255',
        'nama' => 'required|string|max:255',      // tambahan validasi nama
        'kelas' => 'required|string|max:50',      // validasi kelas sesuai kebutuhan
        'email' => 'required|email|unique:users,email', // Email harus unik
        'password' => 'required|string|min:8',    // Password minimal 8 karakter
        'role' => 'required|in:murid,admin'
    ]);

    // Buat user baru
    $user = User::create([
        'name' => $request->name,
        'nama' => $request->nama,           // simpan nama
        'kelas' => $request->kelas,         // simpan kelas
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => $request->role
    ]);

    return response()->json([
        'success' => true,
        'message' => 'User berhasil didaftarkan',
        'user' => $user
    ], 201);
}

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string',
            'password' => 'required'
        ]);

        // Cari user berdasarkan email
        $user = User::where('name', $request->name)->first();

        // Cek password
        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'name' => ['username atau password salah.']
            ]);
        }

        // Hapus semua token lama sebelum buat token baru
        $user->tokens()->delete();

        // Buat token baru
        $token = $user->createToken('authtoken')->plainTextToken;

        return response()->json([
            'success' => true,
            'message' => 'Login berhasil',
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => $user
        ]);
    }

    public function logout(Request $request)
    {
        // Hapus semua token milik user (bukan hanya token yang sedang dipakai)
        $request->user()->tokens()->delete();

        return response()->json([
            'success' => true,
            'message' => 'Logout berhasil'
        ]);
    }

    public function users(Request $request)
    {
        // Ambil data user yang sedang login
        return response()->json([
            'success' => true,
            'user' => $request->user()
        ]);
    }

public function allUsers() {
    $users = User::all();
    return response()->json([
        'success' => true,
        'users' => $users
    ]);
}

public function updateUser(Request $request, $id) {
    $user = User::findOrFail($id);
    $request->validate([
        'name' => 'required|string|max:255',
        'role' => 'required|in:admin,murid'
    ]);
    $user->update($request->only('name', 'role'));
    return response()->json(['success' => true]);
}

public function deleteUser($id) {
    $user = User::findOrFail($id);
    $user->delete();
    return response()->json(['success' => true]);
}
public function resetPassword(Request $request, $id)
{
    $request->validate([
        'password' => 'required|string|min:8'
    ]);

    $user = User::findOrFail($id);
    $user->password = Hash::make($request->password);
    $user->save();

    return response()->json([
        'success' => true,
        'message' => 'Password berhasil diperbarui'
    ]);
}

}