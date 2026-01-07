<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class IsAdminController extends Controller
{
    public function index()
    {
        $user = Auth::user(); 

  
        $isAdmin = $user && $user->email === 'admin@ceff.ch' && $user->id === 1;

        return response()->json($isAdmin, 200);
    }
}
