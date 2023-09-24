<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Rules\CustomEmailValidation;

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
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $user = User::find($id);
      
        // Actualiza el estado "activo" si se proporciona
        if (isset($input['activo'])) {
            $user->activo = $input['activo'];
        }
    
        $user->save();
        return redirect()->to('admin/users')->with('status', "Usuario actualizado correctamente");
    }
    
public function findUser(Request $request){
    $user = User::find($request->id);
       return response()->json(['data'=>$user], 200);
}

public function create(Request $request){
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class, new CustomEmailValidation],
        'cedula' => ['required', 'numeric', 'digits:10', 'valid_ec_cedula','unique:'.User::class],
        'password' => ['required', 'confirmed', 'password_policy', Rules\Password::defaults()],
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
