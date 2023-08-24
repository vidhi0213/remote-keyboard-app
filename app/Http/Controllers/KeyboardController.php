<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeyboardController extends Controller
{
    public function index(Request $request)
    {
        return view('keyboard');
    }
    public function toggleKey(Request $request)
    {
        $user = $request->input('user'); // Get user from query parameter
        $key = $request->input('key');   // Get key number from request

        // Logic to toggle the key for the specified user
        // Update the state in the database

        return response()->json(['success' => true]);
    }

    public function acquireControl(Request $request)
    {
        $user = $request->input('user'); // Get user from query parameter

        // Logic to acquire control
        // Update control status in the database

        return response()->json(['success' => true]);
    }
}
