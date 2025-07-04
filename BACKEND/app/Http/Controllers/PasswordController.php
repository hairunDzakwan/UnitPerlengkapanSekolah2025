<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class PasswordController extends Controller
{
    // Kirimkan link reset password ke email pengguna
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $response = Password::sendResetLink($request->only('email'));

        return $response == Password::RESET_LINK_SENT
            ? response()->json(['message' => 'Link reset password telah dikirim ke email.'])
            : response()->json(['message' => 'Gagal mengirim link reset password.'], 400);
    }

    // Reset password pengguna
    public function reset(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
            'token' => 'required',
        ]);

        $response = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->password = Hash::make($password);
                $user->save();
            }
        );

        return $response == Password::PASSWORD_RESET
            ? response()->json(['message' => 'Password telah direset.'])
            : response()->json(['message' => 'Gagal mereset password.'], 400);
    }
}
