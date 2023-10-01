<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users=DB::table("users")
        ->when($request->input("name"),function($query, $name){
                return $query->where('name' , 'like', '%'.$name.'%' );
        })
        ->select("id", "name", "email", "phone","created_at")
        ->orderByDesc("id")
        ->paginate(10);

        return view("pages.users.index", compact('users'));
    }

    public function create(Request $request)
    {
        return view("pages.users.create");
    }

    public function edit(User $user)
    {
        return view("pages.users.edit", )->with('user', $user);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(storeUserRequest $request)
    {
        User::create([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'password'=>Hash::make($request['password']),
            'roles'=>$request['roles'],
            'phone'=>$request['phone'],
            'address'=>$request['address']
        ]);

        return redirect(route('users.index'))->with('success', 'New User Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        //
        $validate=$request->validated();
        $user->update($validate);

        return redirect()->route('users.index')->with('success', 'update user successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        return redirect()->route('users.index')->with('success', 'delete user successfully');
    }
}
