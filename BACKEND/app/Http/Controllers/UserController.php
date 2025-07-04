<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return response()->json([
            'success' => true,
            'users' => $users,
        ]);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json([
            'success' => true,
            'message' => 'User berhasil dihapus',
        ]);
    }
    public function resetPassword(Request $request, $id)
    {
        $request->validate([
            'password' => 'required|string|min:6',
        ]);
    
        $user = User::findOrFail($id);
        $user->password = Hash::make($request->password);
        $user->save();
    
        return response()->json(['message' => 'Password berhasil diubah.']);
    }
}
