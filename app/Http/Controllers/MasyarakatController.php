<?php

namespace App\Http\Controllers;
use App\Models\masyarakat;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    #index 
    public function index()
    {
        $masya = masyarakat::all();
        return view('masyarakat', compact('masya'));
    }
    #create 
//     public function create()
//     {
//         Masyarakat::create(
//             request()->all()

//         );
//         return view('masyarakat');
//     }
// }
}