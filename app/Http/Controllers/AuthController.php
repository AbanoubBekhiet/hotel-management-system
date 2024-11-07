<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = 'Login';
        $data['password'] = Hash::make('password');
        return view('auth.login', $data);
    }

    public function login(Request $request) {
        // dd($request->all());
        $remember = $request->has('remember');

        if (Auth::attempt(["email" => $request->email, "password" => $request->password], $remember)) {
            $userRole = Auth::user()->role;
            switch ($userRole) {
                case 'admin':
                    return redirect("admin/dashboard")->with("success", "Welcome");
                case 'front_desk':
                    return redirect("front_desk/dashboard")->with("success", "Welcome");
                case 'housekeeper':
                    return redirect("housekeeper/dashboard")->with("success", "Welcome");
                case 'workman':
                    return redirect("workman/dashboard")->with("success", "Welcome");
                default:
                    return redirect()->back()->with("error", "Ensure this email is a member");
            }
        } else {
            return redirect()->back()->with("error", "Enter your email and password");
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    }
}
