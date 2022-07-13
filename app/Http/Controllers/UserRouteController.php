<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserRouteController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $blogs = Blog::select('title')->where('user_id', $user->id)->get();

        return view('UserViwes.profile', ['user' => $user], ['blogs' => $blogs]);
    }
    public function edit($id)
    {
        $user = User::findOrfail($id);
        return view('UserViwes.edit', ['user' => $user]);
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrfail($id);
        $request->validate([
            'name' => 'required|max:20',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'required|min:6|confirmed',
            'age' => 'required|integer',
        ]);
        $data = $request->all();
        $user->update($data);
        return redirect(route('profile.show', $user->id, ['user' => $user]))->with('success', 'User Updated');
    }
}
