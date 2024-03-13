<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public readonly User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        $users = $this->user->all();
        return view('users/users', ['users' => $users]);
    }

    public function create()
    {
        return view('users/user_create');
    }

    public function store(Request $request)
    {
        $created = $this->user->create([
            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName'),
            'email' => $request->input('email'),
            'password' => password_hash($request->input('password'), PASSWORD_DEFAULT),
        ]);

        if ($created) {
            return redirect()->back()->with('message', 'Successfully created');
        }
        return redirect()->back()->with('message', 'Erro create');
    }

    public function show(User $user)
    {
        return view('users/user_show', ['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('users/user_edit', ['user' => $user]);
    }

    public function update(Request $request, string $id)
    {
        $updated = $this->user->where('id', $id)->update($request->except(['_token', '_method']));

        if ($updated) {
            return redirect()->back()->with('message', 'Successfully updated');
        }
        return redirect()->back()->with('message', 'Erro update');
    }

    public function destroy(string $id)
    {
        $this->user->where('id', $id)->delete();
        return redirect()->route('users.index');
    }
}