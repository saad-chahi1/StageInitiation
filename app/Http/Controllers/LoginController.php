<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function logout(Request $request) {
    Auth::logout();
    return redirect('/');
}
}
