<?php

namespace App\Http\Controllers;

use App\Models\Permissions;
use App\Models\Role;
use App\Models\User;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $roles = Role::all();
        $users = Utilisateur::all();
        return View('statistique',compact('roles','users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $permissions = Permissions::all();
        return view('create-role',compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'role' => 'required|string|between:3,20',
            
            ]);
            // dd($request->post());
      $role = Role::create([
            'name'=>$request->role,
        ]);
        $role->permissions()->attach($request->permissions);
        return to_route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $roles = Role::with('permissions')->get();
        $users = Utilisateur::all();
        return View('statistique',compact('roles','users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Role::destroy($id);
        return $this->index();
    }
}
