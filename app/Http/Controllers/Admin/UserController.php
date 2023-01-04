<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function index (){
        return view('admin.users.list')->with('users',User::orderBy('id', 'desc' )->get());
    }
    public function show(){
        return view('admin.users.register');
    }
    public function destroy($id){
        $user = User::destroy($id);
        return redirect()->to('admin/users')->with('status', "Usuario borrado correctamente");
    }
public function updateRol(Request $request , $id){
    $input = $request->all();
    $politica = User::find($id);
    $politica->rol = $input['rol'];
    print($politica);
    $politica->save();
   return redirect()->to('admin.users.list')->with('status', "Usuario borrado correctamente");;
}

public function findUser(Request $request){
    $politica = User::find($request->id);
       return response()->json(['data'=>$politica], 200);
}

public function create(Request $request){
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
        'cedula' => ['required', 'string', 'max:15', 'unique:'.User::class],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'cedula' => $request->cedula,
        'rol' => "usuario",
        'password' => Hash::make($request->password),
    ]);
    return view('admin.users.list')->with('users',User::orderBy('id', 'desc' )->get());
}
}
