<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ApiAuthController extends Controller
{
    public function register(Request $request) {
        // Validasi inputan
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255|unique:users', // Validasi username
            'email' => 'required|string|email|max:255|unique:users', // Validasi email
            'role' => 'required|string|max:255', // Validasi role
            'division' => 'required|string|max:255', // Validasi division
            'password' => 'required|string|min:6|confirmed', // Validasi password
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }

        // Hash password sebelum disimpan
        $request['password'] = Hash::make($request['password']);
        
        // Membuat token random untuk 'remember_token'
        $request['remember_token'] = Str::random(10);

        // Menyimpan data user baru ke database
        $user = User::create([
            'username' => $request['username'],
            'email' => $request['email'],
            'role' => $request['role'],
            'division' => $request['division'],
            'password' => $request['password'],
            'remember_token' => $request['remember_token'],
        ]);

        // Membuat token API untuk user yang baru
        $token = $user->createToken('Laravel Personal Access Client')->accessToken;

        // Menyiapkan response dengan token
        $response = ['token' => $token];

        // Mengembalikan response sukses dengan token
        return response($response, 200);
    }

    public function login(Request $request) {
        // Validasi inputan
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6', // Validasi password, tanpa perlu confirmed karena hanya satu password
        ]);
    
        // Jika validasi gagal
        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }
    
        // Mencari user berdasarkan email
        $user = User::where('email', $request->email)->first();
    
        // Jika user ditemukan
        if ($user) {
            // Memeriksa apakah password yang dimasukkan cocok
            if (Hash::check($request->password, $user->password)) {
                // Membuat token untuk user
                $token = $user->createToken('Laravel Personal Access Client')->accessToken;
                
                // Menyiapkan response dengan token
                $response = ['token' => $token];
    
                // Mengembalikan response sukses dengan token
                return response($response, 200);
            } else {
                // Jika password tidak cocok
                $response = ["message" => "Password mismatch"];
                return response($response, 422);
            }
        } else {
            // Jika user tidak ditemukan
            $response = ["message" => 'User does not exist'];
            return response($response, 422);
        }
    }
}
