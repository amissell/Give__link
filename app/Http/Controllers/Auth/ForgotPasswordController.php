<?php
namespace App\Http\Controllers\Auth;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ForgotPasswordController extends Controller
{
    public function showForgetPasswordForm(): View
    {
        return view('auth.forgetPassword');
    }

    public function submitForgetPasswordForm(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        // Insert the email and token into the password_resets table
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        // Send the reset email to the user
        Mail::send('emails.forgetPassword', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('message', 'We have e-mailed your password reset link!');
    }

    // Show the reset password form
    public function showResetPasswordForm($token): View
    {
        return view('auth.resetPassword', ['token' => $token]);
    }

    // Handle the password reset logic
    public function resetPassword(Request $request)
    {
        // Validate the request
        $request->validate([
            'token' => 'required',
            'email' => 'required|email|exists:users',
            'password' => 'required|confirmed|min:6',
        ]);

        // Check if the token exists in the password_resets table
        $reset = DB::table('password_resets')->where('token', $request->token)->first();

        if (!$reset || $reset->email != $request->email) {
            return back()->withErrors(['email' => 'This reset link is invalid.']);
        }

        // Reset the password
        $user = User::where('email', $request->email)->first();
        $user->password = Hash::make($request->password);
        $user->save();

        // Delete the reset token from the password_resets table
        DB::table('password_resets')->where('email', $request->email)->delete();

        return redirect('/login')->with('message', 'Your password has been reset successfully!');
    }
}
