<?php

namespace App\Http\Controllers;

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
        return view('create-role');
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
        Role::create([
            'name'=>$request->role,
            // 'utilisateur_id'=>NULL
        ]);
        return to_route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $roles = Role::all();
        $users = Utilisateur::all();
        return View('statistique',compact('roles','users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
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
