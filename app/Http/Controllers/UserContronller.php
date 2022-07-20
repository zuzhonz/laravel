<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;

class UserContronller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Roles::all();
        $users = User::select('id', 'name', 'username', 'email', 'role', 'avatar', 'status')
            ->paginate(5);




        return view('admin.users.user-list', [
            'users' => $users,
            'roles' =>  $roles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Roles::all();
        $code = 'PH' . mt_rand(10000, 99999);



        return view('admin.users.add-user', [
            'code' => $code,
            'roles' => $roles,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $users = new User;

        $data = $users->fill($request->all());



        if ($request->hasFile('avatar')) {
            $avt = $request->file('avatar');
            $avtName = $avt->getClientOriginalName();
            $avtName = $request->username . '_' . $avtName;
            $users->avatar = $avt->storeAs('image/users', $avtName);
        }
        $users->save();
        return redirect(route('admin.users.index'))->with('status', "Insert successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return User::find($id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users =  User::find($id);

        // dd($users);
        $roles = Roles::all();

        $routeLink = route('admin.users.update', ['user' => $id]);

        $code = 'PH' . mt_rand(10000, 99999);
        return view('admin.users.add-user', [
            'roles' => $roles,
            'user' => $users,
            'code' => $code,
        ]);
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
        $input = $request->all();
        $users = User::find($id);
        $users->fill($input);


        if ($request->hasFile('avatar')) {
            $avt = $request->file('avatar');
            $avtName = $avt->getClientOriginalName();
            $avtName = $request->username . '_' . $avtName;
            $users->avatar = $avt->storeAs('image/users', $avtName);
        }


        $users->save();
        return redirect()->route('admin.users.index')
            ->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $users = User::find($user->id);

        $users->delete();

        return redirect()->route('admin.users.index');
    }
}