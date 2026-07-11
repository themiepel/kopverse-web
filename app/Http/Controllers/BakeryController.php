<?php

namespace App\Http\Controllers;

use App\Models\BakeryProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BakeryController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([

            'bakery_name'=>'required|min:3|max:30',

            'role'=>'required'

        ]);

        BakeryProfile::create([

            'user_id'=>Auth::id(),

            'bakery_name'=>$request->bakery_name,

            'role'=>$request->role,

            'level'=>1,

            'xp'=>0,

            'coin'=>50,

            'energy'=>100

        ]);

        return redirect('/home');

    }
}
