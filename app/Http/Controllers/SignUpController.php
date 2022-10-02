<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SignUpController extends Controller
{
    public function index() {
        return view("signup.index", [
            "title" => "Sign Up"
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            "name" => "required|min:3|max:255",
            "username" => "required|min:4|max:255|unique:users",
            "email" => "required|email:dns|unique:users",
            "password" => "required|min:8|max:255"
        ]);

        $validatedData["password"] = Hash::make($validatedData["password"]);

        User::create($validatedData);

        // $request->session()->flash("success", "Sign up successful. Please log in.");
        return redirect("/login")->with("success", "Sign up successful. Please log in.");
    }
}
