<?php

namespace App\Http\Controllers\admin;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role_id = Role::where('name', '=', 'user')->first()->id;
        $data['users'] = User::where('role_id', $role_id)->orderBy('number_of_votes', 'desc')->paginate(6);
        return view('dashboard.user.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'name' => 'required|string|max:255',
            'eamil' => 'email|unique:users,email',
            'password' => 'required|string|min:6',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'role_id' => 'integer|exists:roles,id',
        ]);

        $image = $request->file('image');
        $data['image'] = Storage::disk('uploads')->put('images', $image);
        $data['password'] = Hash::make($request->password);

        User::create($data);
        return redirect()->route('user.index')->with('success', 'User created successfully');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['roles'] = Role::all();
        $data['user'] = User::findOrFail($id);
        return view('dashboard.user.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $request->all();

        $request->validate([
            'name' => 'string|max:255',
            'email' => "email|unique:users,email,$id",
            'role_id' => 'integer|exists:roles,id',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|nullable'
        ]);

        $data['image'] = $user->image;
        if ($request->hasFile('image')) {
            Storage::disk('uploads')->delete($data['image']);
            $data['image'] = Storage::disk('uploads')->put('images', $request->file('image'));
        }

        $user->update($data);
        return redirect()->route('user.index')->with('success', 'User Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $user = User::find($request->id);
        $path = $user->image;
        Storage::disk('uploads')->delete($path);
        $user->delete();
        return redirect()->route('user.index')->with('success', 'User deleted successfully');
    }
}