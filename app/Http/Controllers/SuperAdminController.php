<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Cabang;
use Illuminate\Support\Facades\Hash;

class SuperAdminController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }
    public function dashboard()
    {
        return view('super-admin.dashboard');
    }

    public function users()
    {

        return view('super-admin.users');
    }

    public function manageRole(string $id)
    {
        $users = User::find($id);
        $roles = Role::all();
        $cabang = Cabang::all();
        return view('super-admin.manage-role', compact('users', 'roles', 'cabang'));
    }


    public function updateRole(Request $request)
    {
        User::where('id', $request->user_id)->update([
            'role' => $request->role_id,
            'cabang' => $request->cabang_id
        ]);
        return redirect()->back();
    }
    public function create(Request $request)
    {
        $users = User::with('roles')->where('role', '!=', 10)->get();
        $pageTitle = 'Input Data Karyawan';
        $roles = Role::all();
        $cabang = Cabang::all();
        return view('super-admin.create', compact('pageTitle', 'roles', 'cabang'));
    }
    public function createUser(Request $request)
    {
        $request->validate([
            'name' => 'string|required|min:2',
            'email' => 'string|email|required|max:100|unique:users',
            'password' => 'string|required|confirmed|min:6'

        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role_id;
        $user->password = Hash::make($request->password);
        $user->save();

        return view('super-admin.users');
    }
    public function getData(Request $request)
    {
        $user = User::with('roles', 'cabangs');

        if ($request->ajax()) {
            return datatables()->of($user)
                ->addIndexColumn()
                ->addColumn('action', function ($user) {
                    return view('super-admin.action', compact('users'));
                })
                ->toJson();
        }
    }
}
