<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;

// use App\Http\Controllers\Controller;
// use App\Models\User;
use App\Providers\RouteServiceProvider;
// use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Password;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\UserRegistrationRequest;
use Illuminate\Foundation\Auth\Access\Authorizable;
use App\Models\LogActivities; // Import model MitraActivityLog
use Carbon\Carbon;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::get();
        return view('user', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // public function store(UserRegistrationRequest $request) : RedirectResponse
    // {
    //     $this->validate($request, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
    //         'role' => 'required',
    //         'password' => 'required',
    //     ]);

    //     $user = User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'role' => $request->role,
    //         'password' => Hash::make($request->password),
    //     ]);
    //     event(new Registered($user));

    //     Auth::login($user);
    //     return redirect()->route('tambah-user.index');
    // }
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'role' => ['required', Rule::in(['bsrm', 'project', 'sales', 'admin', 'oms', 'viewer'])],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);
        $user->save();

        return redirect()->route('pengguna.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back();
    }
}
