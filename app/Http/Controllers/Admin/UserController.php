<?php

// namespace App\Http\Controllers\Admin;

// use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\User;

// class UserController extends Controller
// {
//   public function index()
//     {
//         $users = User::all();
//         return view('users.index', compact('users'));
//     }

//     public function edit(User $user)
//     {
//         return view('users.edit', compact('user'));
//     }

//     public function update(Request $request, User $user)
//     {
//         $request->validate([
//             'role' => 'required|in:admin,organization,donor,volunteer',
//         ]);

//         $user->update(['role' => $request->role]);

//         return redirect()->route('admin.users.index')->with('success', 'User role updated successfully!');
//     }
// }
