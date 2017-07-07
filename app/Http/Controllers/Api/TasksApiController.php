<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class TasksApiController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response() -> json(['users'=>$users],200);
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return response() -> json(['user' => $user],200);
    }

    public function show($id)
    {
        $user = User::find($id);
        return response() -> json(['user' => $user],200);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return response() -> json(['user' => $user],200);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return response() -> json(['user' => $user],200);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return response() -> json(['user' => $user],200);
    }

}
