<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function authenticate(Request $request)
{
    // Validate the request data
    $validate_data = Validator::make($request->all(), [
        'name' => 'required',
        'password' => 'required',
        'email' => 'required|email'
    ]);

    // Check if the checkbox is checked
    $isChecked = $request->has('my_checkbox');
    if (!$isChecked) {
        return response()->json(['status' => 422, 'message' => 'Checkbox is not checked']);
    }

    // Return validation errors if validation fails
    if ($validate_data->fails()) {
        return response()->json(['status' => 422, 'message' => $validate_data->errors()]);
    }

    // Attempt to log the user in
    if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')])) {
        // Authentication passed
        $user = Auth::user();

        // Check if the name matches
        if ($user->name !== $request->get('name')) {
            // Log out the user if the name does not match
            Auth::logout();
            return response()->json(['status' => 422, 'message' => 'Name is incorrect']);
        }

        // Redirect based on user type
        if ($user->user_type == 1) {
            return redirect()->route('dashboard.admin');
        } elseif ($user->user_type == 2) {
            return redirect()->route('dashboard.user');
        } else {
            return response()->json(['status' => 422, 'message' => 'User type is invalid']);
        }
    } else {
        // Authentication failed
        return response()->json(['status' => 422, 'message' => 'Authentication failed']);
    }
}
    public function signup()
    {
        return view('auth.register');
    }

    /**
     * Display the specified resource.
     */
    public function createUser(Request $request)
    {
        $validate_data = Validator::make($request->all(), [
            'name' => 'required',
            'password' => 'required',
            'email' => 'required|unique:users,email',
            'phone_no' => 'required|unique:users,phone_no',
        ], [
            'name.required' => 'The name field is required.',
            'password.required' => 'The password field is required.',
            'email.required' => 'The email field is required.',
            'email.unique' => 'The email has already been taken.',
            'phone_no.required' => 'The phoneno field is required.',
        ]);
        if ($validate_data->fails()) {
            return response()->json(['status' => 422, 'errors' => $validate_data->errors()]);
        } else {

            $model = new UserModel;

            $model->name = $request->input('name');
            $model->phone_no = $request->input('phone_no');
            $model->password = Hash::make($request->input('password'));
            $model->email = $request->input('email');
            $model->user_type = 2;

            $model->save();

            return redirect()->route('login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
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
