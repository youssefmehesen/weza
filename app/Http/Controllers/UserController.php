<?php

namespace App\Http\Controllers;

use App\Models\User1;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User1::orderBy('created_at', 'ASC')->paginate(5);
        return view('users.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User1::create($request->all());
        return redirect()->route('users')->with('success', 'user added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User1::findOrFail($id);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User1::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User1::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('users')->with('success', 'users updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User1::findOrFail($id);
  
        $user->delete();
  
        return redirect()->route('users')->with('success', 'user deleted successfully');
    }
    
}  